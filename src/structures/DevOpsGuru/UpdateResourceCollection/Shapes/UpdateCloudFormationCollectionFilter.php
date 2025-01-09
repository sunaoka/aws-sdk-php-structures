<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateResourceCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StackNames
 */
class UpdateCloudFormationCollectionFilter extends Shape
{
    /**
     * @param array{StackNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
