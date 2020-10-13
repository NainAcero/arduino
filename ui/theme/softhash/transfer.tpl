{include file="sections/header.tpl"}
<div class="row">
    <div class="col-md-5">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{$_L['New Transfer']}</h5>

            </div>
            <div class="ibox-content" id="ibox_form">
                <div class="alert alert-danger" id="emsg">
                    <span id="emsgbody"></span>
                </div>
                <form class="form-horizontal" method="post" id="tform" role="form">
                    <div class="form-group">
                        <label for="faccount" class="control-label">{$_L['From']}</label> 
                        <select id="faccount" name="faccount" class="form-control">
                            <option value="">{$_L['Choose an Account']}</option>
                            {foreach $d as $ds}
                                <option value="{$ds['account']}">{$ds['account']}</option>
                            {/foreach}


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="taccount" class="control-label">{$_L['To']}</label>
                            <select id="taccount" name="taccount" class="form-control">
                                <option value="">{$_L['Choose an Account']}</option>
                                {foreach $d as $ds}
                                    <option value="{$ds['account']}">{$ds['account']}</option>
                                {/foreach}


                            </select>
                    </div>
                    <div class="form-group">
                        <label for="date" class="control-label">{$_L['Date']}</label>
                        
                            <input type="text" class="form-control"  value="{$mdate}" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                    </div>

                    <div class="form-group">
                        <label for="description" class="control-label">{$_L['Description']}</label>
                            <input type="text" class="form-control" id="description" name="description">
                        
                    </div>

                    <div class="form-group">
                        <label for="amount" class="control-label">{$_L['Amount']}</label>
                        
                            <input type="text" class="form-control amount" id="amount" name="amount">
                        
                    </div>





                    <div class="form-group">
                        <label for="tags" class="control-label">{$_L['Tags']}</label>
                       
                            <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                                {foreach $tags as $tag}
                                    <option value="{$tag['text']}">{$tag['text']}</option>
                                {/foreach}

                            </select>
                        
                    </div>
                    <div class="form-group">
                        <div>
                            <h4><a href="#" class="dropdown-option" id="a_toggle">{$_L['Advanced']}<span class="fa fa-angle-down"></span></a> </h4>
                        </div>
                    </div>
                    <div id="a_hide">

                        <div class="form-group">
                            <label for="inputPassword3" class="control-label">{$_L['Method']}</label>
                                <select id="pmethod" name="pmethod" class="form-control">
                                    <option value="">{$_L['Select Payment Method']}</option>
                                    {foreach $pms as $pm}
                                        <option value="{$pm['name']}">{$pm['name']}</option>
                                    {/foreach}


                                </select>
                        </div>
                        <div class="form-group">
                            <label for="ref" class="control-label">{$_L['Ref']}</label>
                                <input type="text" class="form-control" id="ref" name="ref">
                                <small class="help-block">{$_L['ref_example']}</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div >
                            <button type="submit" id="submit" class="btn btn-primary">{$_L['Submit']}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{$_L['Recent Transfers']}</h5>

            </div>
            <div class="ibox-content">

                <table class="table table-bordered sys_table">
                    <thead>
                    <tr>
                        <th>{$_L['Account']}</th>
                        <th>{$_L['Description']}</th>
                        <th>{$_L['Amount']}</th>

                    </tr>
                    </thead>
                    <tbody>

                    {foreach $tr as $trs}
                        <tr>
                            <td>{$trs['account']}</td>
                            <td><a href="{$_url}transactions/manage/{$trs['id']}/">{$trs['description']}</a> </td>
                            <td class="amount">{$trs['amount']}</td>
                        </tr>
                    {/foreach}

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

{include file="sections/footer.tpl"}