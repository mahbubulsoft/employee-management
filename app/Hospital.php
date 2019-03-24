<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'name', 'estDate','phone','email','air_conditioning','total_doctors','total_departments','main_img','gallery_img_1','gallery_img_2','chancellor','ownership_type', 'address','district_id','sub_district_id','isActive'
    ];
    public function departments()
    {
        return $this->belongsToMany('App\HospitalDepartment', 'hospital_department_relations')->withTimestamps();
    }
}
?>
