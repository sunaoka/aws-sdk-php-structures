<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PartitionField> $PartitionFields
 */
class PartitionSpec extends Shape
{
    /**
     * @param array{PartitionFields: list<PartitionField>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
