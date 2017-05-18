<?php
echo '<pre>';
var_dump(GridFor(5));
var_dump(GridIf(5));
var_dump(GridBest(5));
echo '</pre>';

function GridFor($grid_size)
{
    for($r = 0; $r < $grid_size; ++$r)
    {
        for($c = 0; $c < $grid_size; ++$c)
        {
            //top+
            if($r == 0) {
                $grid[$r][$c] = 0;
            }

            //left
            if($c == 0) {
                $grid[$r][$c] = 0;
            }

            //right
            if($c == $grid_size - 1) {
                $grid[$r][$c] = 0;
            }

            //bottom
            if($r == $grid_size - 1) {
                $grid[$r][$c] = 0;
            }
        }
    }

    return $grid;
}

function GridIf($grid_size)
{
    for($i = 0; $i < $grid_size * 4; ++$i) {
        if($i < $grid_size) {
        //top+
            $grid[0][$i] = 0;
        } elseif ($i < $grid_size * 2) {
        //left
            $grid[$i - $grid_size][$grid_size - 1] = 0;
        } elseif ($i < $grid_size * 3) {
        //right
            $grid[$i - ($grid_size*2)][0] = 0;
        } else {
        //bottom
            $grid[$grid_size - 1][$i - ($grid_size*3)] = 0;
        }
    }
    return $grid;
}

function GridBest($gird_size)
{
    for ($i = 0; $i < $gird_size; ++$i) {
        $grid[0][$i] = 0;
        $grid[$gird_size-1][$i] = 0;
        $grid[$i][0] = 0;
        $grid[$i][$gird_size-1] = 0;
    }
    return $grid;
}
