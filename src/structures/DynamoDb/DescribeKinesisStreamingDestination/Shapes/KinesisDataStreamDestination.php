<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeKinesisStreamingDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamArn
 * @property 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING'|null $DestinationStatus
 * @property string|null $DestinationStatusDescription
 * @property 'MILLISECOND'|'MICROSECOND'|null $ApproximateCreationDateTimePrecision
 */
class KinesisDataStreamDestination extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string|null,
     *     DestinationStatus?: 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING'|null,
     *     DestinationStatusDescription?: string|null,
     *     ApproximateCreationDateTimePrecision?: 'MILLISECOND'|'MICROSECOND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
