<?php


namespace controller;


use m\Application;
use m\Controller;

use model\DosenModel;

class DosenController extends Controller
{
    private $_mDosen;

    public function __construct(Application $application)
    {
        parent::__construct($application);

        $this->_mDosen = new DosenModel();
    }

    public function index()
    {
        $dosen = $this->_mDosen->findAll();

        $data = array(
            'all_Dosen' => $dosen
        );
        $this->view->setData($data);
        
        $this->view->setContentTemplate('/dosen/dosen_template.php');
        $this->view->render();
        // var_dump($data) or die;
    }

    public function addDosen()
    {
        if(isset($_POST['submit']))
        {
            // Berarti user sudah mengisi data, tinggal simpan
            $this->saveDosenData();

            // Redirect ke halaman awal
            $this->redirect('/data-dosen');
        }

        $this->view->setContentTemplate('/dosen/add_dosen.php');
        $this->view->render();
    }

    private function saveDosenData()
    {
        $nip       = $_POST['nip'];
        $nama       = $_POST['nama'];
        $alamat     = $_POST['alamat'];
        $prodi     = $_POST['prodi'];
        $jurusan     = $_POST['jurusan'];
        $hp         = $_POST['hp'];

        $this->_mDosen->addNew($nip, $nama, $alamat, $prodi,$jurusan, $hp);
    }
}


// http://github.com/yunhasnawa/mphpf