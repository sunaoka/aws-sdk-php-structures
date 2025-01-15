<?php

namespace Sunaoka\Aws\Structures\Glue\BatchUpdatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $PartitionValueList
 * @property ErrorDetail|null $ErrorDetail
 */
class BatchUpdatePartitionFailureEntry extends Shape
{
    /**
     * @param array{
     *     PartitionValueList?: list<string>|null,
     *     ErrorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
