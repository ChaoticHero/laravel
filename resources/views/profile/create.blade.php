<form method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Project title">
    <textarea name="description"></textarea>
    <input type="file" name="image">

    <button type="submit">Add Project</button>
</form>
