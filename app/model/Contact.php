<?php
    class Contact extends TRecord
    {
        const TABLENAME = 'contact';
        const PRIMARYKEY= 'id';
        const IDPOLICY =  'max'; // {max, serial}
        
        public function __construct($id = NULL, $callObjectLoad = TRUE)
        {
            parent::__construct($id, $callObjectLoad);
            parent::addAttribute('name');
            parent::addAttribute('email');
            parent::addAttribute('number');
            parent::addAttribute('andress');
            parent::addAttribute('notes');
        }
    }
 ?>