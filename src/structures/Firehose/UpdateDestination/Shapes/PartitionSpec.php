<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PartitionField>|null $Identity
 */
class PartitionSpec extends Shape
{
    /**
     * @param array{Identity?: list<PartitionField>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
