<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceName
 */
class PartitionSource extends Shape
{
    /**
     * @param array{SourceName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
