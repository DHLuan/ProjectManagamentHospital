
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.sidebar')

        @include('admin.navbar')


        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 100px;">
                <form action="{{url('upload_doctor')}}" enctype="multipart/form-data" method="">
                    @csrf
                    <div style="padding: 15px;">
                        <label>Doctor Name</label>
                        <input type="text" style="color: black" name="name" placeholder="write the name">
                    </div>

                    <div style="padding: 15px;">
                        <label>Phone</label>
                        <input type="number" style="color: black" name="phone" placeholder="write the phone">
                    </div>

                    <div style="padding: 15px;">
                        <label>Speciality</label>
                        <select name="speciality" style="color: black;">
                            <option>--Select option---</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="hands">hands</option>
                            <option value="skin">skin</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>Room no</label>
                        <input type="text" style="color: black" name="room" placeholder="write the room number">
                    </div>

                    <div style="padding: 15px;">
                        <label>Doctor Image</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>
            </div>
        </div>


        @include('admin.script')
    </div>
  </body>
</html>
