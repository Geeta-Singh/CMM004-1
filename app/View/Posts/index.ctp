<?php
foreach ( $data as &$post ) {
    echo $post['Post']['post'] . $this->Html->link('Delete', array('controller' => 'posts', 'action' => 'delete', $post['Post']['id'])) .'<br/>';
}
?>