<?php

namespace Sunaoka\Aws\Structures\Billing\GetCreditAllocationHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $creditId
 * @property Amount $creditAmount
 * @property string|null $description
 * @property string $accountId
 * @property string $appliedServiceName
 * @property string $billingMonth
 * @property bool $isEstimatedBill
 */
class CreditAllocationHistoryEntry extends Shape
{
    /**
     * @param array{
     *     creditId: string,
     *     creditAmount: Amount,
     *     description?: string|null,
     *     accountId: string,
     *     appliedServiceName: string,
     *     billingMonth: string,
     *     isEstimatedBill: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
