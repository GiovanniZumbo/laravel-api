<div>
    <a href="{{ route('guest.projects.show', $project->id) }}" class="btn btn-success">Show</a>
    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('admin.projects.delete', $project->id) }}" method="POST" class="btn btn-danger"
        value = "Elimina">
        @csrf
        @method('DELETE')



    </form>
</div>
