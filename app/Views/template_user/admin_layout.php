<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<?= $this->include('template/head'); ?>

<body>
    <div class="wrapper">
        <!-- Sidebar komponen -->
        <?= $this->include('template_user/sidebar'); ?>
        <!-- end sidebar -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <?= $this->include('template_user/navbar'); ?>
            <!-- end of navbar navigation -->
            <!-- cKOnten -->
            <?= $this->renderSection('conten'); ?>
        </div>
    </div>
    <!-- JS -->
    <?= $this->include('template_user/js'); ?>
</body>

</html>