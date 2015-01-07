<h1>Blog posts</h1>
<div id="menu">
<ul>
    <li>
        <?php echo $this->Html->link(
            'Add Post',
            array('controller' => 'posts', 'action' => 'add')
        ); ?>
    </li>
    <li>
        <?php echo $this->Html->link(
            'Dashboard',
            array('controller' => 'users', 'action' => 'index')
        ); ?>
    </li>
    <li>
        <?php echo $this->Html->link(
            'Logout',
            array('controller' => 'users', 'action' => 'logout')
        ); ?>
    </li>
</ul>
</div>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
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
width:129px;
float:left;
background:#000;
color:#fff;
font-weight:bold;
text-align:center;
line-height:35px;
border-left:1px solid #fff;
}
</style>