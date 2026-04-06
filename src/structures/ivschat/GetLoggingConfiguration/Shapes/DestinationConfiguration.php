<?php

namespace Sunaoka\Aws\Structures\ivschat\GetLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationConfiguration|null $s3
 * @property CloudWatchLogsDestinationConfiguration|null $cloudWatchLogs
 * @property FirehoseDestinationConfiguration|null $firehose
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     s3?: S3DestinationConfiguration|null,
     *     cloudWatchLogs?: CloudWatchLogsDestinationConfiguration|null,
     *     firehose?: FirehoseDestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
