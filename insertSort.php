<?php
/**
 * 插入排序
 * @param  array   $arr  将要排序的数组
 * @param  boolean $desc 是否倒序
 * @return array         排序后的数组
 */
function insertSort($arr, $desc = false)
{
    if (!is_array($arr) || count($arr) == 0) {
        return $arr;
    }
    // 外层循环，待插入元素$arr[$i]
    for ($i = 1, $size = count($arr); $i < $size; $i++) {
        // 待插入元素
        $tmp = $arr[$i];
        // 内层循环，待比较元素$arr[$j]
        for ($j = $i - 1; $j >= 0; $j--) {
            // 若待插入元素小于待比较元素，交换两元素位置
            if ($tmp > $arr[$j]) {
                break;
            }
            $arr[$j + 1] = $arr[$j];
            $arr[$j]     = $tmp;
        }
    }
    if ($desc) {
        return array_reverse($arr);
    }
    return $arr;
}
