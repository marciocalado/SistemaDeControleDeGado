namespace App\Http\Controllers;

use App\Models\Gado;
use Illuminate\Http\Request;

class GadoController extends Controller
{
    public function index()
    {
        $gado = Gado::all();

        return view('gado.index', compact('gado'));
    }

    public function create()
    {
        return view('gado.create');
    }

    public function store(Request $request)
    {
        $request->validate(Gado::rules());

        $gado = new Gado($request->all());
        $gado->save();

        return redirect()->route('gado.index');
    }

    public function show(Gado $gado)
    {
        return view('gado.show', compact('gado'));
    }

    public function edit(Gado $gado)
    {
        return view('gado.edit', compact('gado'));
    }

    public function update(Request $request, Gado $gado)
    {
