<?php
  echo $project_title['Project']['name'];
  echo $this->Form->edit('Project',['type' => 'post']);
  echo $this->Form->input('name');
  echo $this->Form->input('description');
  echo $this->Form->input('state');
   echo $this->Form->input('start_date');
   echo $this->Form->input('due_date');
   
  echo $this->Form->submit('Save', [
    'class' => 'btn btn-primary'
]);
echo $this->Form->end();
?>
