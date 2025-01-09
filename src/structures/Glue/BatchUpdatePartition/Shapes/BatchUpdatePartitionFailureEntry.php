<?php

namespace Sunaoka\Aws\Structures\Glue\BatchUpdatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $PartitionValueList
 * @property ErrorDetail $ErrorDetail
 */
class BatchUpdatePartitionFailureEntry extends Shape
{
    /**
     * @param array{
     *     PartitionValueList?: list<string>,
     *     ErrorDetail?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
