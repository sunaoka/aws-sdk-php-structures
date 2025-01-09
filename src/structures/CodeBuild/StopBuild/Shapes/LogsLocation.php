<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupName
 * @property string $streamName
 * @property string $deepLink
 * @property string $s3DeepLink
 * @property string $cloudWatchLogsArn
 * @property string $s3LogsArn
 * @property CloudWatchLogsConfig $cloudWatchLogs
 * @property S3LogsConfig $s3Logs
 */
class LogsLocation extends Shape
{
    /**
     * @param array{
     *     groupName?: string,
     *     streamName?: string,
     *     deepLink?: string,
     *     s3DeepLink?: string,
     *     cloudWatchLogsArn?: string,
     *     s3LogsArn?: string,
     *     cloudWatchLogs?: CloudWatchLogsConfig,
     *     s3Logs?: S3LogsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
