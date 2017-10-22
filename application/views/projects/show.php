<!-- Left side -->
<div class="col-xs-9">
    <h2><?php echo $project->name; ?></h2>
    <p><i><strong>Date Created:</strong> <?php echo $project->date_created; ?></i></p>
    <h3>Description</h3>
    <p><?php echo $project->body; ?></p>
</div>


<!-- Right side -->
<div class="col-xs-3">
    <h3 class="text-center">Actions</h3>

    <ul class="list-group">
        <li class="list-group-item">
            <a href="<?php echo base_url().'tasks/create/'.$project->id; ?>">Create Task</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo base_url().'projects/edit/'.$project->id; ?>">Edit Project</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo base_url().'projects/delete/'.$project->id; ?>">Delete Project</a>
        </li>
    </ul>
</div>