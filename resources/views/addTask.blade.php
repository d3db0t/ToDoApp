<html>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
        <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4"></script>
        
    <body>
            <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">ToDoList</a>
                      </div>
                  
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li><a href="/dashboard">Dashboard</a></li>  
                          <li class="active"><a href="#">AddTask <span class="sr-only">(current)</span></a></li>
                          
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search">
                          </div>
                          <button class="btn btn-default" type="submit">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="/logout">Logout</a></li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea">Task</label>
                        <div class="col-lg-3">
                          <textarea class="form-control" id="textArea" rows="3"></textarea>
                          <span class="help-block">Write the content of the task.</span>
                        </div> 
                  <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                  </div>          

    </body>
</html>