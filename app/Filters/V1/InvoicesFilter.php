<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoicesFilter extends ApiFilter
{


    protected array $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte']
    ];

    protected array $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_at',
        'paidDate' => 'paid_at'
    ];

    protected array $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];


}
