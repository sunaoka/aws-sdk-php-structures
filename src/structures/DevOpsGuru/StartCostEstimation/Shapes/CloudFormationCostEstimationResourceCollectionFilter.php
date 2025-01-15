<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\StartCostEstimation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StackNames
 */
class CloudFormationCostEstimationResourceCollectionFilter extends Shape
{
    /**
     * @param array{StackNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
