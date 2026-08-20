<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedInstanceTypes
 */
class InstanceRequirementsRequest extends Shape
{
    /**
     * @param array{allowedInstanceTypes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
