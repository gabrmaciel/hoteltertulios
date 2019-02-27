@extends('layouts.app')

@section('content')
    <div class="nosso-hotel py-5" id="nosso-hotel">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="title font-secondary title-red pt-5">Nosso hotel</h4>
                    <span class="title-subtitle title-subtitle-red"></span>
                    <div class="row pt-5">
                        <div class="col-7">
                            <p class="font-secondary font-secondary-text">O Hotel Tertulio’s está há mais de 22 anos trabalhando com excelência e o compromisso de oferecer a você uma estadia prazerosa e aconchegante a um preço realmente acessível. Com estes objetivos alinhados a um atendimento de qualidade, nosso Hotel vem conquistando cada dia mais o respeito e a confiança de inúmeros clientes e parceiros.</p>
                        </div>
                        <div class="col-5">
                            <img src="../public/img/hotel.jpg" alt="" width="100%">
                        </div>
                        <div class="col-5 pt-5">
                            <img src="../public/img/quarto4.jpg" alt="" width="100%">
                        </div>
                        <div class="col-7 pt-5">
                            <p class="font-secondary font-secondary-text">O Hotel Tertulio’s está há mais de 22 anos trabalhando com excelência e o compromisso de oferecer a você uma estadia prazerosa e aconchegante a um preço realmente acessível. Com estes objetivos alinhados a um atendimento de qualidade, nosso Hotel vem conquistando cada dia mais o respeito e a confiança de inúmeros clientes e parceiros.</p>
                        </div>
                        <div class="col-12 pt-5 text-center">
                            <input type="button" value="Faça a sua reserva" class="nosso-hotel-btn btn-lg font-secondary font-weight-bold">
                            <a href="#" class="nosso-hotel-link mt-2 mb-5">ou clique aqui e conheça as nossas acomodações</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="servicos fale-conosco bg-image py-5" id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="title font-secondary">Serviços</h4>
                    <span class="title-subtitle"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-4 pt-5">
                    <div class="servicos-icon">
                        <img src="../public/img/icon-reception.png" alt="Recepção 24H" class="mr-3">
                    </div>
                    <div class="servicos-text">
                        <li class="title-red font-secondary font-weight-bold mb-1">Recepção 24H</li>
                        <p>Nossa recepção funciona de segunda a segunda, 24 horas por dia. Nossos hóspedes podem trabalhar ou passear sem preocupação! Estamos prontos para recepcioná-los.</p>
                    </div>
                </div>
                <div class="col-4 pt-5">
                    <div class="servicos-icon">
                        <img src="../public/img/icon-credit-card.png" alt="Cartão de crédito" class="mr-3">
                    </div>
                    <div class="servicos-text">
                        <li class="title-red font-secondary font-weight-bold mb-1">Cartão de crédito</li>
                        <p>Oferecemos serviço de cartão de crédito para facilitar o seu modo de pagamento e tornar a sua estadia ainda mais segura. Trabalhamos com as bandeiras Visa, Master e American Express.</p>
                    </div>
                </div>
                <div class="col-4 pt-5">
                    <div class="servicos-icon">
                        <img src="../public/img/icon-credit-card.png" alt="Estacionamento" class="mr-3">
                    </div>
                    <div class="servicos-text">
                        <li class="title-red font-secondary font-weight-bold mb-1">Estacionamento</li>
                        <p>Possuímos estacionamento próprio com circuito fechado e sistema completo de câmeras monitorando 24 horas por dia. Todos os nossos hóspedes poderão usufruir desse serviço sem preocupação!</p>
                    </div>
                </div>
                <div class="col-4 pt-5">
                    <div class="servicos-icon">
                        <img src="../public/img/icon-washing-machine.png" alt="Lavanderia completa" class="mr-3">
                    </div>
                    <div class="servicos-text">
                        <li class="title-red font-secondary font-weight-bold mb-1">Lavanderia completa</li>
                        <p>Possuimos um serviço próprio de lavanderia para que os nossos hóspedes tenham o máximo de conforto sem sair do seu apartamento. Tudo isso a um preço acessível e justo!</p>
                    </div>
                </div>
                <div class="col-4 pt-5">
                    <div class="servicos-icon">
                        <img src="../public/img/icon-breakfast.png" alt="Café da manhã" class="mr-3">
                    </div>
                    <div class="servicos-text">
                        <li class="title-red font-secondary font-weight-bold mb-1">Café da manhã</li>
                        <p class="mb-0">Oferecemos a você um delicioso café da manhã. Servimos diariamente bolos, pães diversos, frutas frescas, biscoitos, e muito mais.</p>
                        <p class="mb-0"><b>Segunda à sábado:</b> 06h00 às 10h30</p>
                        <p><b>Domingo:</b> 06h30 às 10h30</p>
                    </div>
                </div>
                <div class="col-4 pt-5">
                    <div class="servicos-icon">
                        <img src="../public/img/icon-wifi.png" alt="Café da manhã" class="mr-3">
                    </div>
                    <div class="servicos-text">
                        <li class="title-red font-secondary font-weight-bold mb-1">Wi-Fi grátis</li>
                        <p class="mb-0">Contamos com sistema Wi-Fi de alta velocidade que abrange todo o hotel! No conforto do seu apartamento, em nossa sala ou na recepção, você poderá contar com uma internet estável e de qualidade para você e sua família.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="localizacao py-5" id="localizacao">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="title font-secondary title-red">Localização</h4>
                    <span class="title-subtitle title-subtitle-red"></span>
                    <div class="row pt-5">
                        <div class="col-6">
                            <p class="font-secondary font-secondary-text mb-1">O Hotel Tertulio’s  está estrategicamente localizado em um bairro tranquilo e muito seguro, onde você conseguirá descansar até mais tarde, se necessário.</p>
                            <p class="font-secondary font-secondary-text mb-0"><b>Endereço: Av. 88 A, 161 - Jardim Parque Res.,</b></p>
                            <p class="font-secondary font-secondary-text"><b>Rio Claro - SP, 13506-123</b></p>
                        </div>
                        <div class="col-6">
                            <p class="font-secondary font-secondary-text">Visando tornar a sua estadia mais agradável sem ter de se preocupar com grandes deslocamentos, estamos próximo às maiores empresas de Rio Claro: <b>Whirlpool, Owens Corning, Tigre, Sulplast, Tec-Bor, De Heus.</b> Dentre outros, estamos próximos ao <b>Sesi e à Chácara Penteado.</b></p>
                            <img src="../public/img/Whirlpool1.png" alt="Whirpool" class="mr-2 mb-2">
                            <img src="../public/img/owens.jpg" alt="Owens Corning" class="mr-2 mb-2">
                            <img src="../public/img/tigre-original.jpg" alt="Tigre Original" class="mr-2 mb-2"><br>
                            <img src="../public/img/Sulpast1.jpg" alt="Sulplast" class="mr-2 mb-2">
                            <img src="../public/img/penteado.jpg" alt="Chácara Penteado" class="mr-2 mb-2">
                            <img src="../public/img/sesi.png" alt="Sesi" class="mr-2 mb-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fale-conosco bg-image py-5 font-secondary" id="fale-conosco">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="title font-secondary">Fale conosco</h4>
                    <span class="title-subtitle"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6 pt-5">
                    <span class="font-secondary-text">Estamos sempre à disposicao para atender e sanar todas as duvidas dos nossos hospedes. Em caso de duvidas, basta entrar em contato, por telefone, WhatsApp ou E-mail.</span>
                </div>
                <div class="col-6 pt-5">
                        {!! Form::open(['url' => 'foo/bar']) !!}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        {{Form::label('nome', 'Nome completo', ['class' => 'font-secondary-label'])}}
                                        {{Form::text('nome', '', ['class' => 'form-control'])}}
                                    </div>
                                    <div class="col-4">
                                        {{Form::label('assunto', 'Assunto', ['class' => 'font-secondary-label'])}}
                                        {{Form::select('assunto',[
                                            'Dúvidas__',
                                            'Elogios',
                                            'Críticas',
                                            'Reservas',
                                            'Outros'
                                    ], ['class' => 'form-control'])}}
                                    </div>
                                    <div class="col-6 mt-3">
                                        {{Form::label('email', 'E-Mail', ['class' => 'font-secondary-label'])}}
                                        {{Form::text('email', '', ['class' => 'form-control'])}}
                                    </div>
                                    <div class="col-6 mt-3">
                                        {{Form::label('telefone', 'Telefone', ['class' => 'font-secondary-label'])}}
                                        {{Form::text('telefone', '', ['class' => 'form-control'])}}
                                    </div>
                                    <div class="col-12 mt-3">
                                        {{Form::label('mensagem', 'Mensagem', ['class' => 'font-secondary-label'])}}
                                        {{Form::textarea('mensagem', '', ['class' => 'form-control textarea'])}}
                                    </div>
                                    <div class="col-12 mt-4">
                                        {{Form::submit('Enviar mensagem', ['class'=>'btn btn-primary px-3 py-2'])}}
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection