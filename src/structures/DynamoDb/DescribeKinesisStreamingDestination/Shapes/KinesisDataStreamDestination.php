<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeKinesisStreamingDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING' $DestinationStatus
 * @property string $DestinationStatusDescription
 * @property 'MILLISECOND'|'MICROSECOND' $ApproximateCreationDateTimePrecision
 */
class KinesisDataStreamDestination extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string,
     *     DestinationStatus?: 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING',
     *     DestinationStatusDescription?: string,
     *     ApproximateCreationDateTimePrecision?: 'MILLISECOND'|'MICROSECOND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
