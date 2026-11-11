<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLOUDWATCH'|'S3'|'FIREHOSE' $LogDestination
 * @property string|null $DestinationArn
 */
class LogDeliveryDestination extends Shape
{
    /**
     * @param array{
     *     LogDestination: 'CLOUDWATCH'|'S3'|'FIREHOSE',
     *     DestinationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
