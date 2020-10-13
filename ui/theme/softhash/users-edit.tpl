
{include file="sections/header.tpl"}
<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{$_L['Edit User']}</h5>

            </div>
            <div class="ibox-content" id="sysfrm_ajaxrender">

                <form role="form" name="accadd" method="post" action="{$_url}settings/users-edit-post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label" for="username">{$_L['Username']}</label>
                        <input type="text" class="form-control" id="username" name="username" value="{$d['username']}">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="fullname">{$_L['Full Name']}</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="{$d['fullname']}">
                    </div>

                    {if ($user['id']) neq ($d['id'])}
                        <div class="form-group">
                            <label class="control-label" for="user_type">User {$_L['Type']}</label>
                            <select name="user_type" id="user_type" class="form-control">
                                <option value="Admin" {if $d['user_type'] eq 'Admin'}selected="selected" {/if}>{$_L['Full Administrator']}</option>
                                <option value="Employee" {if $d['user_type'] eq 'Employee'}selected="selected" {/if}>{$_L['Employee']}</option>

                            </select>
                            <small class="help-block">{$_L['user_type_help']}</small>
                        </div>
                    {/if}
                    <div class="form-group">
                        <label class="control-label" for="password">{$_L['Password']}</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small class="help-block">{$_L['password_change_help']}</small>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="cpassword">{$_L['Confirm Password']}</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                    </div>

                    <input type="hidden" name="id" value="{$d['id']}">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {$_L['Submit']}</button>
                </form>

            </div>
        </div>



    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div id="croppic"></div>

            <button type="button" id="cropContainerHeaderButton" class="btn-sm btn-info">{$_L['Upload Picture']}</button>
            <button type="button" id="opt_gravatar" class="btn-sm btn-info">{$_L['Use Gravatar']}</button>
            <button type="button" id="no_image" class="btn-sm btn-default">{$_L['No Image']}</button>
        </div>
        <div class="form-group">
            <label for="fullname">{$_L['Picture']}</label>
            <input type="text" class="form-control picture" id="picture" readonly name="picture" value="{$d['img']}">
        </div>
    </div>



</div>




{include file="sections/footer.tpl"}
