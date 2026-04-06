<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeKinesisStreamingDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamArn
 * @property 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|null $DestinationStatus
 * @property string|null $DestinationStatusDescription
 */
class KinesisDataStreamDestination extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string|null,
     *     DestinationStatus?: 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|null,
     *     DestinationStatusDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
