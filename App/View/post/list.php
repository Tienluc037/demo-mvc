<a href="index.php?page=post-create">Create</a>
<table border="3">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($posts)): ?>
    <?php foreach ($posts as $key=>$post): ?>
    <tr>
        <td><?php echo $key+1 ?></td>
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->content ?></td>
        <td><a href="index.php?page=post-detail&id=<?php echo $post->id?>">Detail</a></td>
        <td><a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?page=post-delete&id=<?php echo $post->id?>">Delete</a></td>
        <td><a href="index.php?page=post-update&id=<?php echo $post->id?>">Update</a></td>

    </tr>
    <?php endforeach;?>
    <?php else: ?>
    <tr>
        <td colspan="4"> không có dữ liệu</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>