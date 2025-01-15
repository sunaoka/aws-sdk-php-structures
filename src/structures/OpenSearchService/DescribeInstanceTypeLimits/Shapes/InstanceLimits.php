<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceCountLimits|null $InstanceCountLimits
 */
class InstanceLimits extends Shape
{
    /**
     * @param array{InstanceCountLimits?: InstanceCountLimits|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
