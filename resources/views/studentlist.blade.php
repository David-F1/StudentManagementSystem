<div class="card" >
  <img  src="https://www.ebsilon.org/wp-content/uploads/2020/09/Edu-4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">here you can find all information about students.</p>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">cne</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td >{{ $student->cne }}</td>
      <td>{{ $student->FirstName  }}</td>
      <td>{{ $student->SecondName }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->speciality }}</td>
      <td>
        <a href="#" class="btn btn-sm btn-info">Show</a>
        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <a href="#" class="btn btn-sm btn-danger">Delet</a>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>


  </div>
