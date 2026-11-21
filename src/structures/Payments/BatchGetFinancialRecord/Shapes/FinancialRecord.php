<?php

namespace Sunaoka\Aws\Structures\Payments\BatchGetFinancialRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'INVOICE'|'CREDIT_MEMO' $type
 * @property BusinessUnit $businessUnit
 * @property CurrencyAmount $amount
 * @property Balances $balances
 * @property 'OPEN'|'CLOSED' $settlementStatus
 * @property 'OUTSTANDING'|'PROCESSING'|'SETTLED'|'CANCELED' $status
 * @property \Aws\Api\DateTimeResult $issuedAt
 * @property \Aws\Api\DateTimeResult|null $closedAt
 * @property FinancialRecordDetails $details
 */
class FinancialRecord extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'INVOICE'|'CREDIT_MEMO',
     *     businessUnit: BusinessUnit,
     *     amount: CurrencyAmount,
     *     balances: Balances,
     *     settlementStatus: 'OPEN'|'CLOSED',
     *     status: 'OUTSTANDING'|'PROCESSING'|'SETTLED'|'CANCELED',
     *     issuedAt: \Aws\Api\DateTimeResult,
     *     closedAt?: \Aws\Api\DateTimeResult|null,
     *     details: FinancialRecordDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
