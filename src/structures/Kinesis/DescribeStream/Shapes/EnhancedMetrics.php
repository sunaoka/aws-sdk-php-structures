<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'> $ShardLevelMetrics
 */
class EnhancedMetrics extends Shape
{
    /**
     * @param array{ShardLevelMetrics?: list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
