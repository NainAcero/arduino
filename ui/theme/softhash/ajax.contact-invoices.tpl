<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>
        <th>#</th>
        <th>{$_L['Account']}</th>
        <th>{$_L['Amount']}</th>
        <th>{$_L['Status']}</th>
        <th class="text-right">{$_L['Manage']}</th>
    </tr>
    </thead>
    <tbody>

    {foreach $i as $is}
        <tr>
            <td>{$is['id']}</td>
            <td>{$is['account']}</td>
            <td class="amount" data-a-dec="{$_c['dec_point']}" data-a-sep="{$_c['thousands_sep']}" data-a-pad="{$_c['currency_decimal_digits']}" data-p-sign="{$_c['currency_symbol_position']}" data-a-sign="{$_c['currency_code']} " data-d-group="{$_c['thousand_separator_placement']}">{$is['total']}</td>
            <td>{ib_lan_get_line($is['status'])}</td>
            <td>
                <a href="{$_url}invoices/view/{$is['id']}/" class="btn"><i class="fa fa-eye"></i></a>
                <a href="{$_url}invoices/edit/{$is['id']}/" class="btn"><i class="fa fa-pencil"></i></a>
            </td>
        </tr>
    {/foreach}

    </tbody>
</table>