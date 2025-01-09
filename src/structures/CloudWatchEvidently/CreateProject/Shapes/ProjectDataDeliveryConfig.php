<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestinationConfig $cloudWatchLogs
 * @property S3DestinationConfig $s3Destination
 */
class ProjectDataDeliveryConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsDestinationConfig,
     *     s3Destination?: S3DestinationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
