<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\StartCostEstimation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StackNames
 */
class CloudFormationCostEstimationResourceCollectionFilter extends Shape
{
    /**
     * @param array{StackNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
