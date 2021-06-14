<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
        .form-holder{
            width: 70%;
            margin: auto;

        }
        .preview{
            width: 4em;
            height: 4em;
        }
        .preview img {
            height: 80%;
            width: 80%;
            margin-top: .5em;
        }
    </style>
    <title>Document</title>
</head>
<body>
      <header>

    <nav class="navbar navbar-light  shadow bg-body rounded ">
        <div class="d-flex justify-content-around w-100">
  <div class="logo">
            <a href="#" class="navbar-brand">
          <svg id="Component_1_1" data-name="Component 1 – 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="141" height="30.781" viewBox="0 0 141 30.781">
  <defs>
    <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 512 394">
      <image width="512" height="394" xlink:href="data:image/png;base64,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"/>
    </pattern>
  </defs>
  <text id="co-exhi" transform="translate(65 20.391)" fill="#707070" font-size="20" font-family="SitkaHeading, Sitka Heading"><tspan x="0" y="0">CO-</tspan><tspan y="0" fill="#005dff">EXHI</tspan></text>
  <rect id="iconfinder_1851816_agent_exhibition_gallery_model_property_icon_512px" width="40" height="30.781" rx="15" fill="url(#pattern)"/>
</svg>
            </a>
        </div>
        <div class="d-flex flex-row" id="navBar">
        
             <div>
                  <a class="nav-link text-dark" aria-current="page" href="dashboard"><i class="fas fa-list-alt"></i> &nbsp;    Dashboard</a>
             </div>
            <div>
                <a class="nav-link  text-dark " href="#"> <i class="fas fa-search-location"></i> &nbsp;Discover</a>

            </div>
            <div> 

                <a class="nav-link  text-dark " href="#">   <i class="fas fa-fire"></i> &nbsp; Trending</a>
            </div>
            <div>

                <a class="nav-link  text-dark " href="#" tabindex="-1"> <i class="fas fa-cogs"></i>  &nbsp;Settings</a>
            </div>
         

        </div>
        <div class="buttons">
            <button class="btn btn-info text-white">Exhibit</button>
            <div></div>
        </div>
        </div>

      
</nav>
    </header>
    <div class="content d-flex flex-row bg-body">
  <div class=" w-75 p-5">
        <div class="form-holder shadow p-5 bg-light rounded ">
            <h1 class="text-center">Showcase <span class="text-primary">your</span> project</h1>
           
            <form method="POST"class="py-5" action="<?=base_url('image-upload')?>" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="project-title">Project title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Project base</label>
                    <select name="project_base" id="" class="form-select">
                        <option value="1">Web Development</option>
                        <option value="2">Designer</option>
                        <option value="3">Game Developer</option>
                        <option value="4">Photographer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="summary">Summary</label>
                    <input type="text" name="summary" class="form-control">
                </div>
               
                <div class="mb-3">
                    <label for="file">Upload project file</label>
                    <input type="file" name="project_file" class="form-control">
                </div>
                <input name="save" type="submit" class="btn btn-info text-white" value="Make a post">
            </form>
        </div>
    </div>
      <div class="side-nav w-25  shadow p-5 rounded bg-light">
            <div class="leading-project w-75 m-auto h-25 bg-body shadow bg-ligh rounded-3 ">
                <p>Online Exam system</p>

            </div>
            <div class="recent">
                <h3>Leading Activities</h3>
                <div class="leading-content d-flex flex-row">
                    <div class="bg-white preview rounded-circle text-center">
                       <img  src="<?= base_url('assets/images/Ok-bro.png')?>" alt="">
    </div>
                    <p>Amogi coders</p>
                </div>
                <div class="leading-content">
                    <p>Amogi coders</p>
                </div>
                <div class="leading-content">
                    <p>Amogi coders</p>
                </div>
            </div>
            <div class="trending">
                <h3>Trending</h3>
                <div class="trending-content">
                    <p>Ineza jost</p>
                </div> <div class="trending-content">
                    <p>Ineza jost</p>
                </div> 
                <div class="trending-content">
                    <p>Ineza jost</p>
                </div>
            </div>
        </div>
    </div>
  
        <div class="footer bg-dark text-white">
            <p class="p-3 mb-0 text-center">@Copyright. Co-exhi project. 2021</p>
        </div>
</body>
</html>