<?php

namespace Sunaoka\Aws\Structures\Glue\BatchUpdatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $PartitionValueList
 * @property PartitionInput $PartitionInput
 */
class BatchUpdatePartitionRequestEntry extends Shape
{
    /**
     * @param array{
     *     PartitionValueList: list<string>,
     *     PartitionInput: PartitionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
