<x-app-layout>

    
    <div style="padding-left: 40%; padding-top: 10%;">
        
        <label style="padding-left: 20%; padding-top: 10%; font-weight: bold;">Add a post</label>
        <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">
        <br>

        @csrf
            <div>
                <label>Description</label>
                <input type="text" name="description">
            </div>
            <br>
            <div>
                <label>Upload an image</label>
                <input type="file" name="image">
            </div>
            <br>
            <div>
                <input type="submit" name="image" style="background-color: skyblue; cursor: pointer; padding: 10px; border-radius: 10px;">
            </div>


        </form>

    </div>
</x-app-layout>
