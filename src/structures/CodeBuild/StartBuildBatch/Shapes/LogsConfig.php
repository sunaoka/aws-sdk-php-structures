<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsConfig|null $cloudWatchLogs
 * @property S3LogsConfig|null $s3Logs
 */
class LogsConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsConfig|null,
     *     s3Logs?: S3LogsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
