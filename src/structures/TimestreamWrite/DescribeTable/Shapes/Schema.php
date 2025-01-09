<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PartitionKey> $CompositePartitionKey
 */
class Schema extends Shape
{
    /**
     * @param array{CompositePartitionKey?: list<PartitionKey>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
