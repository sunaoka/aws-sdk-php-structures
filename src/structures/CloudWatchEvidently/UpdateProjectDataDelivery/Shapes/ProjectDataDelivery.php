<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProjectDataDelivery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestination|null $cloudWatchLogs
 * @property S3Destination|null $s3Destination
 */
class ProjectDataDelivery extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsDestination|null,
     *     s3Destination?: S3Destination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
