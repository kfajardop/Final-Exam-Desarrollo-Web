<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $artistaCancione?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion" class="form-label">{{ __('Duracion') }}</label>
            <input type="text" name="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $artistaCancione?->duracion) }}" id="duracion" placeholder="Duracion">
            {!! $errors->first('duracion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="artista_id" class="form-label">{{ __('Artista Id') }}</label>
            <input type="text" name="artista_id" class="form-control @error('artista_id') is-invalid @enderror" value="{{ old('artista_id', $artistaCancione?->artista_id) }}" id="artista_id" placeholder="Artista Id">
            {!! $errors->first('artista_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="genero_id" class="form-label">{{ __('Genero Id') }}</label>
            <input type="text" name="genero_id" class="form-control @error('genero_id') is-invalid @enderror" value="{{ old('genero_id', $artistaCancione?->genero_id) }}" id="genero_id" placeholder="Genero Id">
            {!! $errors->first('genero_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="album_id" class="form-label">{{ __('Album Id') }}</label>
            <input type="text" name="album_id" class="form-control @error('album_id') is-invalid @enderror" value="{{ old('album_id', $artistaCancione?->album_id) }}" id="album_id" placeholder="Album Id">
            {!! $errors->first('album_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>