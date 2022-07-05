<?php
function notification($message, $type) {
    
    ?>
    <div class="snackbar">
    <div class="snackbar-inner">
        <div class="snackbar-text <?php echo $type;?> ">
            <?php echo $message; ?>
        </div>
    </div>
<?php
   
}

notification("Registration successful", "success");



?>
<!-- snackbar alert -->
<script>
    var snackbar = document.querySelector('.snackbar');
    var showSnackbarButton = document.querySelector('#show-snackbar');
    showSnackbarButton.addEventListener('click', function() {
        snackbar.className = 'show';
        setTimeout(function() {
            snackbar.className = snackbar.className.replace('show', '');
        }, 3000);
    });
