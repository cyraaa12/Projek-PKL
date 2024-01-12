<!DOCTYPE html>  
<html>  
<head>  
    <title>Form</title>  
    <meta charset="utf-8" />  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
</head>  
<body>  
    <div class="container py-5">  
        <div class="card">  
            <div class="card-header bg-primary text-white">  
                <h4 class="text-uppercase text-center">Input Data</h4>  
            </div>  
            <form action="savedata" method="POST">
                @csrf
            <div class="card-body">  
                <form>  
                    <div class="form-row">  
                        <div class="col-md-6">  
                            <label>Project Name</label>  
                            <input type="text" name="project_name" placeholder="Project Name" class="form-control" required/>  
                        </div>  
                        <div class="col-md-6">
                            <label for="client_id">Client</label>
                            <select name="client_id" id="client_id" class="form-control" required>
                            <option disabled>Pilih Salah Satu</option>
                            //menampilkan data dari controller ke view
                            @foreach ($client as $list)
                            <option value="{{ $list->client_id }}">{{ $list->client_name }}</option>
                            @endforeach
                            </select>
                        </div> 
                    </div>  
                    <div class="form-row">  
                        <div class="col-md-6">  
                            <label for="Project_status">Status</label>
                             <select name="Project_status" id="Project_status" class="form-control" required> 
                             <option disabled>Pilih Salah Satu</option>
                             <option value="O">Open</option>
                             <option value="G">Going</option>
                             <option value="D">Done</option>
                             </select>
                        </div> 
                    </div>
                    <div style="margin-top:15px;">    
                        <button type="submit" class="btn btn-primary rounded-0">Submit</button>  
                    </div>  
                </form>  
            </div>  
        </div>  
    </div>  
</body>  
</html> 