<div class="form-group">
    <label for="">Nome</label>
    {!! Form::text('name', $client->name ?? old('name'), ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <label for="">Profissão</label>
    {!! Form::text('profission', $client->profission ?? old('profission'), ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <label for="">Endereço</label>
    {!! Form::text('address', $client->address ?? old('address'), ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <label for="">Data nascimento</label>
    {!! Form::date('date', $client->date ?? old('date'), ['class'=>'form-control']) !!}
</div>