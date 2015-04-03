<?php

App::uses('Model', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends Model {

    public $name = 'User';


    public function beforeSave($options = array()) {
        // Encrypt password with built-in password hasher.
        if (isset($this->data[$this->alias]['password'])) {
            // load the object
            $passwordHasher = new SimplePasswordHasher();
            // Hash password
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
            // $this->data variable is sent to the next step of $this->Model->save() operation.
        }
        return true;
    }

}