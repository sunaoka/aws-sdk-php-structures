<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CapabilityIssue>|null $issues
 */
class CapabilityHealth extends Shape
{
    /**
     * @param array{issues?: list<CapabilityIssue>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
