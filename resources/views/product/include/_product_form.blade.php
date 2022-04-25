
<div class="row">
<h3>{{$mode}} product</h3>
</div>
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
    @error('name')
        <p style="color:red">{{$message}}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    @error('description')
        <p style="color:red">{{$message}}</p>
    @enderror
</div>
<div class="mb-3">
        <label for="category" class="form-label">Category</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category_id" id="category">
        
        @foreach($categories as $category)
            
            <option value="{{$category->id}}">{{$category->name}}</option>
            
        @endforeach
    </select>
    @error('category_id')
        <p style="color:red">{{$message}}</p>
    @enderror
</div>
<div class="mb-3">
<input type="submit" value="Save" class="btn btn-primary">
</div>