<?php

class Application_Form_KeywordForm extends Zend_Form {

    public function init() {
        $keyword = $this->createElement('text', 'keyname')->setRequired(TRUE)
                ->setAttrib('Placeholder', 'Keyword Title');
        $submit = $this->createElement('submit', 'submit')->setAttrib('class', 'btn btn-primary')->setLabel('Add New Keyword');
        $update = $this->createElement('submit', 'update')->setAttrib('class', 'btn btn-primary')->setLabel('Update');
        $this->addElements(array($keyword, $submit, $update));
    }

}

?>
