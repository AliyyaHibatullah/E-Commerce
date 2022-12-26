<?php
		    namespace App\Libraries;

		    use Dompdf;

		    class Mypdf extends Dompdf
		    {
		        public function __construct()
		        {
		            parent::__construct();
		        }

		        public function generate($view,$data=array(),$filename='report',$paper='A4',$orientation='portrait')
		        {
		            $html = view($view,$data);
					$this->loadHtml($html);
					$this->setPaper($paper,$orientation);
					$this->set_option('isRemoteEnabled',TRUE);
					$this->render();
					$this->stream($filename.".pdf",array("Attachment"=>FALSE));
		        }
		    }