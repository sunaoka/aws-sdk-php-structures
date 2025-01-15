<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateResourceCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StackNames
 */
class UpdateCloudFormationCollectionFilter extends Shape
{
    /**
     * @param array{StackNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
