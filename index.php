<!doctype html>
<html>
  <head>
    <script src="scripts.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>
    
    <div class="container-xl text-center" style="border:7px double #16acd8;margin:80px 90px 10px 90px;padding:50px;background-color:white;box-shadow: 8px 10px lightblue;">
      <div class="row">
        <div class="col-md-2">
         <input type="text" placeholder="enter original text A" class="form-control" id="textA" required/> 
        </div>
        <div class="col-md-3">
         <button class="form-control btn btn-info" onclick="charSpace()">Characters inlcuding space</button> 
        </div>
        <div class="col-md-2">
          <button class="form-control btn btn-info" onclick="replaceSpace()">Replace space</button>
        </div> 
        <div class="col-md-5">
         <button class="form-control btn btn-info"  onclick="charWithoutSpace()">Total Characters without space in begining and at the end</button>
        </div>
      </div>

         <br /> <br /> 
      
      <div class="row">
        <div class="col-md-4">
         <input type="text" placeholder="enter new text B" class="form-control" id="textB" required/> 
        </div>
        <div class="col-md-4">
         <input type="text" placeholder="enter new text C" class="form-control" id="textC" required/> 
        </div>
        <div class="col-md-4">
         <button class="form-control btn btn-warning" onclick="textConcat()">show A, B and C with Concat method</button> <br /> <br /> 
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
         <h1> A , B and C result - <span id="addtexth1"></span> </h1> 
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
         <input type="number" placeholder="start" class="form-control" id="startNumber" required/> 
        </div>
        <div class="col-md-3">
         <input type="number" placeholder="end" class="form-control" id="endNumber" required/>
        </div>
        <div class="col-md-3"> 
         <button type="button" class="form-control btn btn-danger" onclick="resultSlice()">Show me slice result in alert</button> 
        </div>
        <div class="col-md-3">
         <button type="button" class="form-control btn btn-danger" onclick="resultSubstr()">Show me substr result in alert</button> 
        </div>
      </div><br /> <br /> 

      <div class="row">
        <div class="col-md-6">
         <input type="text" placeholder="replace or replace all with this new word " class="form-control" id="replacetext" required/>
        </div>
        <div class="col-md-6">
         <button class="form-control btn btn-success" onclick="replaceText()">Replace</button>
        </div>
      </div>
    </div>
    <script src="scripts.js"></script>
  </body>
</html>
