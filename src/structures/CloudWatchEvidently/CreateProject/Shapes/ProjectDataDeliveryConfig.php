<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestinationConfig|null $cloudWatchLogs
 * @property S3DestinationConfig|null $s3Destination
 */
class ProjectDataDeliveryConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsDestinationConfig|null,
     *     s3Destination?: S3DestinationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
