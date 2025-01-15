<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetResourceCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StackNames
 */
class CloudFormationCollectionFilter extends Shape
{
    /**
     * @param array{StackNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
