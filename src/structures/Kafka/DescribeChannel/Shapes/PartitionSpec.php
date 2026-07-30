<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TIME_HOUR' $PartitionStrategy
 * @property list<PartitionSource>|null $SourceList
 */
class PartitionSpec extends Shape
{
    /**
     * @param array{
     *     PartitionStrategy: 'TIME_HOUR',
     *     SourceList?: list<PartitionSource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
