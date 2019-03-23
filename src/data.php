<?php

class Data extends Lang
{
    public function normalizeTitle($title)
    {
        return ucwords(str_replace('_', ' ', $title));
    }
    
    public function arrayToTable(array $array)
    {
        if ($array && count($array) > 0){
            $table = '<table><thead><tr>';

            foreach ($array[0] as $key => $value) {
                $title = isset($this->lang->$key) ? $this->lang->$key : $this->normalizeTitle($key).'<br>';

                $table .= "<th>{$title}</th>";
            }

            $table .= '</tr></thead><tboby>';

            // all arrays
            foreach ($array as $item) {
                $row = '<tr>';

                // rows
                foreach ($item as $key => $value) {
                    $row .= "<td>{$value}</td>";
                }

                $row .= '</tr>';

                $table .= $row;
            }

            $table .= '<tbody></table>';

            return $table;
        }

        return false;
    }
}
