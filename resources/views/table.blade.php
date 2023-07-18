<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .w-5{
            display: none;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $post)
                        <tr>
                            <td>{{ $post['id'] }}</td>
                            <td>{{ $post['title'] }}</td>
                            <td>{{ $post['body'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li>
                    {{ $data->links() }}</li>
                
                </ul>
                
            </nav>
        </div>
    </div>
</body>
</html>
