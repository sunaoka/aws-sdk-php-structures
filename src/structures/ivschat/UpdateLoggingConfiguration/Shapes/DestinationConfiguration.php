<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestinationConfiguration|null $cloudWatchLogs
 * @property FirehoseDestinationConfiguration|null $firehose
 * @property S3DestinationConfiguration|null $s3
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsDestinationConfiguration|null,
     *     firehose?: FirehoseDestinationConfiguration|null,
     *     s3?: S3DestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
