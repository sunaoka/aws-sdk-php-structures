<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DecreaseReplicaCount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestinationDetails $CloudWatchLogsDetails
 * @property KinesisFirehoseDestinationDetails $KinesisFirehoseDetails
 */
class DestinationDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsDetails?: CloudWatchLogsDestinationDetails,
     *     KinesisFirehoseDetails?: KinesisFirehoseDestinationDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
