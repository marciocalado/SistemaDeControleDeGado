namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Gado extends Model
{
    use HasFactory;

    

   


protected $fillable = [
        'codigo',
        'leite',
        
       
'racao',
        'peso',
        
       
'nascimento',
    ];

    
    ];

   

   
protected $dates = [
        'nascimento',
    ];

    
    ];

   

    ];

public static function rules($id = null)
    {
        
       
return [
            'codigo' => [
                'required',
                
                Rule

               
Rule::unique('gado')->ignore($id),
            ],
            
            ],
           
'leite' => 'required|integer|min:0',
            
           
'racao' => 'required|integer|min:0',
            
           
'peso' => 'required|integer|min:0',
            
           
'nascimento' => 'required|date',
        ];
    }
}

        ];
    }

        ];
   