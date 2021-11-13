<?php
class SinhvienModel extends DB
{
    function getSv()
    {
        return "nguyrn van teo";
    }
    function tong($m, $n)
    {
        return $m + $n;
    }
    function sinhvien()
    {
        $sql = "SELECT *FROM sinhvien";
        return mysqli_query($this->conn, $sql);
    }
}
