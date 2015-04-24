<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 09/03/15
 * Time: 23:08
 */
App::uses('AppController', 'Controller');
class ProjectsController extends AppController {
    public $uses = array('Project','Task','User'); // Select which model to use
    public function index($project_id) {
        $this->set('tasks', $this->Task->findAllByProjectId($project_id));
        $this->set('projectusers', $this->Project->findAllById($project_id));
        $this->set('project_title', $this->Project->find('first',[
            'fields' => ['name','id'],
            'conditions' => [
                'id' => $project_id
            ]
        ]));
        $this->set('project_role', $this->User->ProjectsUser->findByUserIdAndProjectId($this->Auth->user('id'),$project_id));
    }
    public function create () {
        if ( $this->request->is('post') ) {
            print_r($this->request->data);
          if ($this->Project->save($this->request->data)) {
                $this->Session->setFlash("User has been created");
            } else { // If unable to save user, display message
                $this->Session->setFlash("Unable to create user account");
            }
           // $this->Project->save($this->request->data);
        }
    }

    
    public function delete($id) {
        $this->Post->delete($id);
    }
    public function edit() {
	 $projectData = $this->request->data['Project'];
        $this->Task->save($projectData);
    }
}
