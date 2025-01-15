<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : many to many</h5>
                <h6 class="text-center my-4">punya saniah</h6>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr align="center" bgcolor="pink">
                            <th>Nama User</th>
                            <th>Nomor Telepon</th>
                            <th>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if($user->phone) 
                                        {{ $user->phone->phone }}
                                    @else 
                                        No phone
                                    @endif<td>
                                        @foreach ($user->roles as $role)
                                            <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                        @endforeach
                                    </td>
                                    
                                </td>
                            
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>