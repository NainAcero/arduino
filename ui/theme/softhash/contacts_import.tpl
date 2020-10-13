{include file="sections/header.tpl"}

<div class="row">
    <div class="col-md-12 m-b-sm">

        <div class="pull-right">
            <a href="{$_url}contacts/list/" class="btn btn-xs btn-danger"><i class="fa fa-close"></i> {$_L['Cancel']}</a>
             <a href="{$app_url}sysfrm/uploads/system/contacts.csv" class="btn btn-xs btn-primary"><i class="fa fa-download"></i> Descargar archivo de ejemplo</a>
        </div>

    </div>

</div>


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default" id="uploading_inside">
            <div class="panel-body">
                <form action="{$_url}contacts/csv_upload/" class="dropzone" id="upload_container">

                    <div class="dz-message">
                        <h3> <i class="fa fa-cloud-upload"></i>  Arrastra el archivo CSV aquí</h3>
                        <br />
                        <span class="note">O click para seleccionar el archivo</span>
                    </div>

                </form>

            </div>
        </div>

    </div>

</div>






<input type="hidden" id="_msg_importing" value="{$_L['Importing']} ...">
<input type="hidden" id="_msg_are_you_sure" value="{$_L['are_you_sure']}">

{include file="sections/footer.tpl"}