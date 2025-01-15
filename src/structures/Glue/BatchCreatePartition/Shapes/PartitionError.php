<?php

namespace Sunaoka\Aws\Structures\Glue\BatchCreatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $PartitionValues
 * @property ErrorDetail|null $ErrorDetail
 */
class PartitionError extends Shape
{
    /**
     * @param array{
     *     PartitionValues?: list<string>|null,
     *     ErrorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
