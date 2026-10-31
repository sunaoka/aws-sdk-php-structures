<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AcceleratorPartitionTypes
 */
class AcceleratorPartitionLayout extends Shape
{
    /**
     * @param array{AcceleratorPartitionTypes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
