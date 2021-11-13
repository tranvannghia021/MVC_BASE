<?php
class Home extends Controller
{
    function SayHi()
    {
        $teo = $this->model("SinhvienModel");
        echo $teo->getSv();
    }
    function Show($a, $b)
    {
        $teo = $this->model("SinhvienModel");
        $tong = $teo->tong($a, $b);
        $this->view("aodep", [
            "number" => $tong,
            "sv" => $teo->sinhvien(),
        ]);
    }
}
