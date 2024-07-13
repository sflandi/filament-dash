<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

  protected $table = 'clients';
  protected $fillable = [
    "client_name",
    "address",
    "contact",
    "type",
    "ak",
    "sk",
    "service_module",
    "is_active",

  ];
  public $timestamps = true;
}
