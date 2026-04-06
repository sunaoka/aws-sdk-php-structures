<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DateInterval|null $TimeInterval
 * @property BillingPeriod|null $BillingPeriod
 * @property string|null $InvoicingEntity
 */
class InvoiceSummariesFilter extends Shape
{
    /**
     * @param array{
     *     TimeInterval?: DateInterval|null,
     *     BillingPeriod?: BillingPeriod|null,
     *     InvoicingEntity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
