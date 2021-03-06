<?php

function activity_log($menu, $aksi, $item, $assign_to, $assign_type){
    $CI =& get_instance();

    date_default_timezone_set('Asia/Jakarta');
    $time   = date("Y/m/d H:i:s");

    $param['log_time'] = $time; // waktu aksi
    $param['log_user'] = $CI->session->userdata('username');
    $param['log_menu'] = $menu; // nama menu
    $param['log_aksi'] = $aksi; // membuat, menambah, menghapus, mengubah, keluar, masuk
    $param['log_item'] = $item; // nama item barang
    $param['log_assign_to']= $assign_to; //target user
    $param['log_assign_type']= $assign_type; //target aksi (aproval)

    //load model log
    $CI->load->model('Log_model');

    //save to database
    $CI->Log_model->save_log($param);

}

?>