<?php

class Application_Model_TemplateMapper
{
    protected $_dbTable;

    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }

    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Template');
        }
        return $this->_dbTable;
    }

    // saves the given Template in the database
    public function save(Application_Model_Template $TemplateFile)
    {
        $data = array(
            'name'   => $TemplateFile->getName(),
            'userID' => $TemplateFile->getUserID(),
            'type' => $TemplateFile->getType()
        );

        if (null === ($id = $TemplateFile->getID())) {
            unset($data['ID']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }

    // gets all templates from the database
    public function fetchAll()
    {
    	$templateTable = $this->getDbTable();
    	
    	$result = $templateTable->fetchAll();
        
        $templates = array();
        foreach ($result as $row) {
            $template = new Application_Model_Template();
            $template->setID($row->ID)
                  ->setName($row->name)
                  ->setUserID($row->userID)
                  ->setType($row->type);
            $templates[] = $template;
        }
        return $templates;
    }
    
    
    public function find($id, Application_Model_Template $template)
    {
    	$result = $this->getDbTable()->find($id);
    	if (0 == count($result))
    	{
    		return;
    	}
    	
    	$row = $result->current();
    	$template->setId($row->ID)
    			  ->setName($row->name)
    			  ->setUserID($row->userID)
    			  ->setType($row->type);
    }

    // gets a template with the given ID
    public function fetchWithId($tp_id)
    {
    	$templateTable = $this->getDbTable();
    	
    	$result = $templateTable->fetchAll("ID=".$tp_id);
        
        $templates = array();
    	foreach ($result as $row) {
            $template = new Application_Model_Template();
            $template->setID($row->ID)
                  ->setName($row->name)
                  ->setUserID($row->userID)
                  ->setType($row->type);
            $templates[] = $template;
        }
        return $templates[0]; // ID is primary key => unique.
    }
}

