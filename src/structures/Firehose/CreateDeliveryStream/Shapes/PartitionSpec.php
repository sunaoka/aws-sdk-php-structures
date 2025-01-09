<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PartitionField> $Identity
 */
class PartitionSpec extends Shape
{
    /**
     * @param array{Identity?: list<PartitionField>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
