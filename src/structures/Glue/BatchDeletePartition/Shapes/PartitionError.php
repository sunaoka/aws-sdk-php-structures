<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeletePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $PartitionValues
 * @property ErrorDetail $ErrorDetail
 */
class PartitionError extends Shape
{
    /**
     * @param array{
     *     PartitionValues?: list<string>,
     *     ErrorDetail?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
