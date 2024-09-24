<?php

use App\Models\Partner;
use App\Models\Section;
use App\Models\Setting;
function get_setting_value($key) {
    $date = Setting::where('key', $key)->first();
    if(isset($date->value)) {
        return $date->value;
    }else {
        return 'empty';
    }
}

function get_section_data($key) {
    $date = Section::where('post_as', $key)->first();
    if(isset($date)) {
        return $date;
}
}

function get_partner(){
    $data = Partner::all();
    return $data;
}

