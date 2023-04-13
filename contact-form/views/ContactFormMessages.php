<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php




    global $wpdb;
    $sql = "SELECT * FROM `wp_contact_form`";
    $Messages = $wpdb->get_results($sql);


    ?>

    <h1 class="text-center text-secondary my-5 py-2">CONTACT FORM 8 MESSAGES</h1>
<p class="text-center">[Contact_Form_8]</p>



    <div class="container-fluid px-4 mx-fluid table-responsive">


<table id="CONTACT_FORM_8_MESSAGES" class="table table-striped" style="width:100%">
        <thead>
        <tr>
                <th>id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Recieved at</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($Messages as $key => $value) {
            
       ?>
            <tr>
                <td> <?php echo $value->id; ?></td>
                <td> <?php echo $value->FirstName; ?></td>
                <td> <?php echo $value->LastName; ?></td>
                <td> <?php echo $value->Email; ?></td>
                <td> <?php echo $value->Subject; ?></td>
                <td> <?php echo $value->Message; ?></td>
                <td> <?php echo $value->DateSent; ?></td>

            </tr>
            <?php
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Recieved at</th>
            </tr>
        </tfoot>
    </table>

    </div>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>


        $(document).ready(function () {
    $('#CONTACT_FORM_8_MESSAGES').DataTable({
    responsive: true
} );
});
        </script>
