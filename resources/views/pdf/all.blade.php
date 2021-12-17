

                  
                    <div class="container table-responsive py-5"> 
                        <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">title</th>
                            <th scope="col">body</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($articles as $article)
                            <tr>
                           <td>{{ $article->title }}</td>
                           <td>{!! $article->body !!}</td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                        </table>
                        </div>
    