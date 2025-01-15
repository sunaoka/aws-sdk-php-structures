<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PartitionKey>|null $CompositePartitionKey
 */
class Schema extends Shape
{
    /**
     * @param array{CompositePartitionKey?: list<PartitionKey>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
