<?php /* Smarty version Smarty-3.1.13, created on 2020-10-12 22:02:00
         compiled from "ui\theme\softhash\dashboard-alt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213575797fce90f6d02-01460114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcffa869ccfa2ecdede135d798d319b0155198cf' => 
    array (
      0 => 'ui\\theme\\softhash\\dashboard-alt.tpl',
      1 => 1602556990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213575797fce90f6d02-01460114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5797fcea0ba290_71356665',
  'variables' => 
  array (
    '_L' => 0,
    'ti' => 0,
    'te' => 0,
    'mi' => 0,
    'me' => 0,
    '_url' => 0,
    'net_worth' => 0,
    '_c' => 0,
    'pg' => 0,
    'pgb' => 0,
    'pgc' => 0,
    'd' => 0,
    'ds' => 0,
    'invoices' => 0,
    'inc' => 0,
    'incs' => 0,
    'exp' => 0,
    'exps' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797fcea0ba290_71356665')) {function content_5797fcea0ba290_71356665($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




    
        
            
                
                    
                    
                
                
                    
                        
                        
                    
                    
                        
                        
                    
                    
                        
                        
                    
                
            
            
                
                    
                    
                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    
                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    
                
            
        
    

    

    





<div class="row">
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg info-tile info-tile-alt tile-teal">
            <div class="row">
                <div class="col-xs-9">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Today'];?>
 </span>
                    
                    <h3 class="font-bold amount"><?php echo $_smarty_tpl->tpl_vars['ti']->value;?>
</h3>
                </div>
                <div class="col-xs-3">
                    <i class="fa fa-money fa-2x text-success"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="widget style1 red-bg info-tile info-tile-alt tile-danger">
            <div class="row">
                <div class="col-xs-9">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Today'];?>
 </span>
                    
                    <h3 class="font-bold amount"><?php echo $_smarty_tpl->tpl_vars['te']->value;?>
</h3>
                </div>
                <div class="col-xs-3">
                    <i class="fa fa-database fa-5x text-danger"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg info-tile info-tile-alt tile-success">
            <div class="row">
                <div class="col-xs-9">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income This Month'];?>
 </span>
                    
                    <h3 class="font-bold amount"><?php echo $_smarty_tpl->tpl_vars['mi']->value;?>
</h3>
                </div>
                <div class="col-xs-3">
                    <i class="fa fa-briefcase fa-5x text-success"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 red-bg info-tile info-tile-alt tile-blue">
            <div class="row">
                <div class="col-xs-9">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense This Month'];?>
 </span>
                    <h3 class="font-bold amount"><?php echo $_smarty_tpl->tpl_vars['me']->value;?>
</h3>
                </div>
                <div class="col-xs-3">
                    <i class="fa fa-cube fa-5x text-danger"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row" id="sort_3">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income n Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
</a>
                </div>
                <div class="ibox-content">
                    <div id="chart"></div>
                </div>
            </div>

        </div>

    </div>
    <div class="row" id="sort_2">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth n Account Balances'];?>
</h5>
                    <a href="#" id="set_goal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-bullseye"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Goal'];?>
</a>
                </div>
                <div class="ibox-content">
                    <div>
                        <h3 class="text-center amount"><?php echo $_smarty_tpl->tpl_vars['net_worth']->value;?>
</h3>
                        <div>
                            <span class="amount"><?php echo $_smarty_tpl->tpl_vars['net_worth']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <span class="amount"><?php echo $_smarty_tpl->tpl_vars['_c']->value['networth_goal'];?>
</span>
                            <small class="pull-right"><span><?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
</span>%</small>
                        </div>


                        <div class="progress progress-small">
                            <div style="width: <?php echo $_smarty_tpl->tpl_vars['pgb']->value;?>
%;" class="progress-bar progress-bar-<?php echo $_smarty_tpl->tpl_vars['pgc']->value;?>
"></div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered" style="margin-top: 26px;">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                        <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                <td class=""><span class="amount<?php if ($_smarty_tpl->tpl_vars['ds']->value['balance']<0){?> text-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['ds']->value['balance'];?>
</span></td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income vs Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                </div>
                <div class="ibox-content">
                    <div id="dchart"></div>
                </div>
            </div>

        </div>
    </div>



<div class="row" id="sort_4">


    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Facturas Recientes</h5>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a>
            </div>
            <div class="ibox-content">
                <div class="table-wrapper">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>
    
                        <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invoices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                            <tr>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];?>
<?php if ($_smarty_tpl->tpl_vars['ds']->value['cn']!=''){?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                                <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
                                <td>
                                    <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>

    
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['r']=='0'){?>
                                        <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Onetime'];?>
</span>
                                    <?php }else{ ?>
                                        <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring'];?>
</span>
                                    <?php }?>
                                </td>
                                <td class="text-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</div>

    <div class="row" id="sort_3">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Income'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php  $_smarty_tpl->tpl_vars['incs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incs']->key => $_smarty_tpl->tpl_vars['incs']->value){
$_smarty_tpl->tpl_vars['incs']->_loop = true;
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['incs']->value['date']));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['incs']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['incs']->value['description'];?>
</a> </td>
                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['incs']->value['amount'];?>
</td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>
            </div>

        </div>


        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Expense'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php  $_smarty_tpl->tpl_vars['exps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exps']->key => $_smarty_tpl->tpl_vars['exps']->value){
$_smarty_tpl->tpl_vars['exps']->_loop = true;
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['exps']->value['date']));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['exps']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['exps']->value['description'];?>
</a> </td>
                                <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['exps']->value['amount'];?>
</td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>
            </div>

        </div>


    </div>



<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>