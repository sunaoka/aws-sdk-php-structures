<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeletePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 */
class PartitionValueList extends Shape
{
    /**
     * @param array{Values: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
