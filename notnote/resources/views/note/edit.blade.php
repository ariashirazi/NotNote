<x-layout>
    <div class="note-container single-note">
    <h1>Edit Your Note</h1>
    <form action=" {{ route('note.update',$note) }} " method="POST" class="note">session
        @csrf
        @method('PUT')
        <textarea name="note" rows="10" class="note-body" placeholder="Enter Your Note Here">
            {{ $note->note }}
        </textarea>
        <div class="note-buttons">
            <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
            <button class="note-submit-button">Submit</button>
        </div>
    </form>
    </div>
</x-layout>
