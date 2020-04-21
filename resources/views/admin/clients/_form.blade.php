        {{ csrf_field() }}
        <!-- <input type="hidden" name="_method" value="PUT"> -->
        <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control" id="name" name="name" value="{{ $client->name }}">
        </div>

        <div class="form-group">
            <label for="document_number">Documento</label>
            <input class="form-control" id="document_number" name="document_number" value="{{ $client->document_number }}">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input class="form-control" id="email" name="email" value="{{ $client->email }}">
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
        </div>

        <div class="form-group">
            <label for="marital_status">Estado Civil</label>
            <select class="form-control" id="marital_status" name="marital_status" value="{{ $client->marital_status }}">
                <option value="">Selecione o estado civil</option>
                <option value="1" {{ $client->marital_status == '1'?'selected="selected"':'' }} >Solteiro</option>
                <option value="2" {{ $client->marital_status == '2'?'selected="selected"':'' }} >Casado</option>
                <option value="3" {{ $client->marital_status == '3'?'selected="selected"':'' }} >Divorciado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date_birth">Data Nasc.</label>
            <input class="form-control" type="date" id="date_birth" name="date_birth" value="{{ $client->date_birth }}">
        </div>

        <div class="radio">
            <label>
                <input type="radio" name="sex" value="m" {{ $client->sex == 'm'?'checked="checked"':'' }}> Masculino
            </label>
        </div>

        <div class="radio">
            <label>
                <input type="radio" name="sex" value="f" {{ $client->sex == 'f'?'checked="checked"':'' }}> Feminino
            </label>
        </div>

        <div class="form-group">
            <label for="physical_disability">Deficiência Física</label>
            <input class="form-control" id="physical_disability" name="physical_disability" value="{{ $client->physical_disability }}">
        </div>

        <div class="checkbox">
            <label>
                <input id="defaulter" type="checkbox" {{ $client->defaulter ?'checked="checked"':'' }}> Inadimplente?
            </label>
        </div>