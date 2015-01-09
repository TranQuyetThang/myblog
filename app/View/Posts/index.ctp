<h1>Blog posts</h1>
<div id="menu">
<ul>
    <li>
        <?php echo $this->Html->link(
            __('Add Post',true),
            array('controller' => 'posts', 'action' => 'add')
        ); ?>
    </li>
    <li>
        <?php echo $this->Html->link(
            __('Dashboard',true),
            array('controller' => 'users', 'action' => 'index')
        ); ?>
    </li>
    <li>
        <?php echo $this->Html->link(
            __('Logout',true),
            array('controller' => 'users', 'action' => 'logout')
        ); ?>
    </li>
</ul>
</div>

<table>
    <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Title'); ?></th>
        <th><?php echo __('Created'); ?></th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
<style>
#menu ul{
list-style-type:none;
padding:0px;
margin:0px;
}

#menu ul li{
display:inline;
}

#menu ul a{
text-decoration:none;
width:150px;
float:left;
background:#000;
color:#fff;
font-weight:bold;
text-align:center;
line-height:35px;
border-left:1px solid #fff;
}
</style>