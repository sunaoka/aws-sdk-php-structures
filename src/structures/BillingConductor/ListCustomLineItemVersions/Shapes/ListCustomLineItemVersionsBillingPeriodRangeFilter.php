<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItemVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartBillingPeriod
 * @property string|null $EndBillingPeriod
 */
class ListCustomLineItemVersionsBillingPeriodRangeFilter extends Shape
{
    /**
     * @param array{
     *     StartBillingPeriod?: string|null,
     *     EndBillingPeriod?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
