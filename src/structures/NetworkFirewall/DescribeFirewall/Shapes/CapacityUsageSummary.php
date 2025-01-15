<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CIDRSummary|null $CIDRs
 */
class CapacityUsageSummary extends Shape
{
    /**
     * @param array{CIDRs?: CIDRSummary|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
