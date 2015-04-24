<?php
/**
 * User:Geeta Singh
 * Date: 22/04/15
 * Time: 14:25
 */
    echo $this->form->create('Project');
    echo $this->form->input('name');
   echo $this->Form->input('description');
  echo $this->Form->input('state',['value' => 'incomplete', 'disabled' => true]);
   echo $this->Form->input('start_date');
   echo $this->Form->input('due_date');
    echo $this->Form->input('points');
    
    echo $this->form->submit('submit');
?>
