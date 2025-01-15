<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroupCostReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $BillingGroupArns
 */
class ListBillingGroupCostReportsFilter extends Shape
{
    /**
     * @param array{BillingGroupArns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
