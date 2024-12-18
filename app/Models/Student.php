<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    private static $student;
    public static function newStudent($request){
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->address = $request->address;
        self::$student->save();
    }
    public static function updateStudent($request,$id){
        self::$student = Student::find($id);
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->address = $request->address;
        self::$student->save();
    }
    public static function deleteStudent($id){
        self::$student = Student::find($id);
        self::$student->delete();
    }
}
