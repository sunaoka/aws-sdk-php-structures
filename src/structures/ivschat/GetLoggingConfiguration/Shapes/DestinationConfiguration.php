<?php

namespace Sunaoka\Aws\Structures\ivschat\GetLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationConfiguration $s3
 * @property CloudWatchLogsDestinationConfiguration $cloudWatchLogs
 * @property FirehoseDestinationConfiguration $firehose
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     s3?: S3DestinationConfiguration,
     *     cloudWatchLogs?: CloudWatchLogsDestinationConfiguration,
     *     firehose?: FirehoseDestinationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
