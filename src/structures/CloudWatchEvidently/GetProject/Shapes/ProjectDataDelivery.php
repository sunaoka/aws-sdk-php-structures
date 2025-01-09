<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestination $cloudWatchLogs
 * @property S3Destination $s3Destination
 */
class ProjectDataDelivery extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsDestination,
     *     s3Destination?: S3Destination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
