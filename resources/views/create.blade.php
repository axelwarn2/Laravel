<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <p>Фамилия: <input type="text" name="surname"></p>
        @error('surname')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <p>Отдел: 
            <select name="departament" id="departament">
                @foreach($departament as $departamen)
                    <option value="{{ $departamen->id }}">{{ $departamen->departament }}</option>
                @endforeach
            </select>
        </p>
        <p>Должность: 
            <select name="job" id="job">
            @foreach($job as $jo)
                    <option value="{{ $jo->id }}">{{ $jo->job }}</option>
                @endforeach
            </select>
        </p>
        <p>Дата поступления: <input type="date" name="receipt"></p>
        @error('receipt')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <p>Дата увольнения: <input type="date" name="data"></p>
        @error('data')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <p>Надбавка: <input type="text" name="supplement"></p>
        @error('supplement')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <button type="submit">Отправить</button>
    </form>

    @if(Session::has('employee'))
        <table border="1">
            <tr>   
                <td>Фамилия</td>
                <td>{{ Session::get('employee')->surname }}</td>
            </tr>
            <tr>
                <td>Отдел</td>
                <td>{{ Session::get('employee')->Departament->departament }}</td>
            </tr>
            <tr>
                <td>Должность</td>
                <td>{{ Session::get('employee')->Job->job }}</td>
            </tr>
            <tr>
                <td>Дата поступления</td>
                <td>{{ Session::get('employee')->receipt }}</td>
            </tr>
            <tr>
                <td>Дата увольнения</td>
                <td>{{ Session::get('employee')->data }}</td>
            </tr>
            <tr>
                <td>Надбавка</td>
                <td>{{ Session::get('employee')->supplement }}</td>
            </tr>
        </table>
    @endif
</body>
</html>