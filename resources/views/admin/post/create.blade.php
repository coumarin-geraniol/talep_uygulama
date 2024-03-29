@extends('layouts.main')


@section('content')

    <div class="page-content">
        <div class="col-xl-6 pb-3">
            <form action="{{route('post.store')}}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center p-2 bg-primary-50">
                    <div class="panel-content" data-select2-id="36">
                        <div class="panel-tag">
                            Server request form (Please make sure to fill in your hardware needs correctly)
                        </div>
                        <div class="form-group" data-select2-id="100">

                            <label class="form-label" for="single-default">
                                CPU:
                            </label>
                            <select class="select2 form-control w-100 select2-hidden-accessible" id="single-default"
                                    data-select2-id="single-default" tabindex="-1" aria-hidden="true">
                                <optgroup data-select2-id="101">
                                    @foreach($cpus as $cpu)
                                        <option data-select2-id="{{ $cpu->id }}">{{ $cpu->name }}</option>
                                    @endforeach

                                </optgroup>

                            </select><span
                                class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                                dir="ltr" data-select2-id="1" style="width: 551.4px;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-single-default-container"><span
                                            class="select2-selection_rendered" id="select2-single-default-container"
                                            role="textbox" aria-readonly="true"></span><span
                                            class="select2-selection_arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>

                            <label class="form-label" for="single-default">
                                RAM:
                            </label>
                            <select class="select2 form-control w-100 select2-hidden-accessible" id="single-default"
                                    data-select2-id="single-default" tabindex="-1" aria-hidden="true">
                                <optgroup data-select2-id="101">
                                      @foreach($rams as $ram)
                                          <option data-select2-id="{{$ram->id}}">{{$ram->name}}</option>
                                      @endforeach
                                </optgroup>

                            </select><span
                                class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                                dir="ltr" data-select2-id="1" style="width: 551.4px;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-single-default-container"><span
                                            class="select2-selection_rendered" id="select2-single-default-container"
                                            role="textbox" aria-readonly="true"></span><span
                                            class="select2-selection_arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>


                            <label class="form-label" for="single-default">
                                Disk:
                            </label>
                            <select class="select2 form-control w-100 select2-hidden-accessible" id="single-default"
                                    data-select2-id="single-default" tabindex="-1" aria-hidden="true">
                                <optgroup data-select2-id="101">
                                      @foreach($disks as $disk)
                                          <option data-select2-id="{{$disk->id}}">{{$disk->name}}</option>
                                      @endforeach
                                </optgroup>

                            </select><span
                                class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                                dir="ltr" data-select2-id="1" style="width: 551.4px;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-single-default-container"><span
                                            class="select2-selection_rendered" id="select2-single-default-container"
                                            role="textbox" aria-readonly="true"></span><span
                                            class="select2-selection_arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>

                            <label class="form-label" for="single-default">
                                İşletim Sistemi:
                            </label>
                            <select class="select2 form-control w-100 select2-hidden-accessible" id="single-default"
                                    data-select2-id="single-default" tabindex="-1" aria-hidden="true">
                                <optgroup data-select2-id="101">
                                      @foreach($systems as $system)
                                          <option data-select2-id="{{ $system->id }}">{{$system->name}}</option>
                                      @endforeach
                                </optgroup>
                            </select><span
                                class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                                dir="ltr" data-select2-id="1" style="width: 551.4px;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-single-default-container"><span
                                            class="select2-selection_rendered" id="select2-single-default-container"
                                            role="textbox" aria-readonly="true"></span><span
                                            class="select2-selection_arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>

                        </div>
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Ip addresi</label>
                            <input type="text" id="simpleinput" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">A kayıdı</label>
                            <input type="text" id="simpleinput" class="form-control">
                        </div>


                        <div class="frame-wrap p-1 mb-2">
                            <p class="form-label" for="single-default">Ağ:</p>
                            <div class="demo">
                                <div class="custom-control custom-radio custom-radio-rounded">
                                    <input type="radio" class="custom-control-input" id="defaultUncheckedRadio"
                                           name="defaultExampleRadios">
                                    <label class="custom-control-label" for="defaultUncheckedRadio">Dış Ağ</label>
                                </div>
                                <div class="custom-control custom-radio custom-radio-rounded">
                                    <input type="radio" class="custom-control-input" id="defaultCheckedRadio"
                                           name="defaultExampleRadios" checked="">
                                    <label class="custom-control-label" for="defaultCheckedRadio">İç Ağ</label>
                                </div>
                            </div>
                        </div>

                        <label class="form-label" for="single-default">
                            Talep nedeni:
                        </label>
                        <select class="select2 form-control w-100 select2-hidden-accessible" id="single-default"
                                data-select2-id="single-default" tabindex="-1" aria-hidden="true">
                            <optgroup data-select2-id="101">
                                  @foreach($cpus as $cpu)
                                      <option data-select2-id="{{$cpus->id}}">{{$cpu->name}}</option>
                                  @endforeach
                            </optgroup>
                        </select><span
                            class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                            dir="ltr" data-select2-id="1" style="width: 551.4px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-single-default-container"><span
                                        class="select2-selection_rendered" id="select2-single-default-container"
                                        role="textbox" aria-readonly="true"></span><span class="select2-selection_arrow"
                                                                                         role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                                                                               aria-hidden="true"></span></span>

                        <div class="form-group mt-2">
                            <label class="form-label" for="example-textarea">Açıklama (Bu sunucu talebinin nedenini
                                belirtiniz): </label>
                            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                        </div>


                        <button class="btn btn-primary waves-effect waves-themed" type="submit">Submit form</button>

                    </div>
                </div>


            </form>

        </div>
    </div>

@endsection
