<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceCountLimits $InstanceCountLimits
 */
class InstanceLimits extends Shape
{
    /**
     * @param array{InstanceCountLimits?: InstanceCountLimits} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
