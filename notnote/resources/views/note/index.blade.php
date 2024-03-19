<x-layout>
<div class="note-container">
    <a href="/note/create" class="new-note-btn">
        New Note
    </a>
    <div class="notes">
        @foreach ($notes as $note)
        <div class="note">
            <div class="note-body">
                 {{ Str::words($note->note,30) }}
            </div>
            <div class="note-buttons">
                <a href="#" class="note-edit-button">Views</a>
                <a href="#" class="note-edit-button">Edit</a>
                <a href="#" class="note-delete-button">Delete</a>

            </div>
        </div>
        @endforeach
    </div>
</div>
</x-layout>