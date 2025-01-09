<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItemVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartBillingPeriod
 * @property string $EndBillingPeriod
 */
class ListCustomLineItemVersionsBillingPeriodRangeFilter extends Shape
{
    /**
     * @param array{
     *     StartBillingPeriod?: string,
     *     EndBillingPeriod?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
