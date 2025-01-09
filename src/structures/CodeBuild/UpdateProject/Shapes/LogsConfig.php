<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsConfig $cloudWatchLogs
 * @property S3LogsConfig $s3Logs
 */
class LogsConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsConfig,
     *     s3Logs?: S3LogsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
