<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CIDRSummary $CIDRs
 */
class CapacityUsageSummary extends Shape
{
    /**
     * @param array{CIDRs?: CIDRSummary} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
