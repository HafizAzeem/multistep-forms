@extends('product.layout')
@section('content')
<div class="jumbotron  mt-5">
        <h5 class="text-center">
             Laravel multi step form with progress bar using jquery bootstrap - DevCaptain.com
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="alert alert-success hide"></div>
        <form id="product_form" novalidate>
            <blockquote>
                <h3>Step:1 Product Detail 1</h3>
                <div class="form-group ">
                    <label >Product Name</label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label >Product Qty</label>
                    <input type="number" id="qty" class="form-control">
                </div>
                <input type="button" class="btn btn-success next-btn" value="Next">
            </blockquote>
            <blockquote>
                <h3>Step:2 Product Detail 2</h3>
                <div class="form-group ">
                    <label >Product Price</label>
                    <input type="number" id="price" class="form-control">
                </div>
                <div class="form-group ">
                    <label >Product Stock</label>
                    <input type="number" id="stock" class="form-control">
                </div>
             <input type="button" name="previous" class="btn btn-dark previous-btn" value="Previous">
             <input type="button" name="next" class="btn btn-success next-btn" value="Next">
            </blockquote>
            <blockquote>
                <h3>Step:3 Product Detail 3</h3>
                <div class="form-group ">
                    <label >Product Description</label>
                    <input type="text" id="description" class="form-control">
                </div>
                <div class="form-group">
                    <label >Product Long Description</label>
                    <textarea type="text" id="long-description" class="form-control"></textarea>
                </div>
                <input type="button" name="previous" class="btn btn-dark" value="Previous">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
           </blockquote>
        </form>
</div>
{{-- css  --}}
<style type="text/css">
    #product_form blockquote:not(:first-of-type) {
        display: none;
    }
</style>
<script>
  $(document).ready(function() {
      var form_count = 1, form_count_form, next_form , total_form
      total_form = $("blockquote").length
      $(".next-btn").click(function() {
          form_count_form = $(this).parent() // get first btn parent
          next_form = $(this).parent().next() // get second parent of the next-btn
          next_form.show() //  show  second parent
          form_count_form.hide() //  hide first parent
      })

  });
</script>
@endsection
