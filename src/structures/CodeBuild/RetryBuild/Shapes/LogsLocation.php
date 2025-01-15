<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupName
 * @property string|null $streamName
 * @property string|null $deepLink
 * @property string|null $s3DeepLink
 * @property string|null $cloudWatchLogsArn
 * @property string|null $s3LogsArn
 * @property CloudWatchLogsConfig|null $cloudWatchLogs
 * @property S3LogsConfig|null $s3Logs
 */
class LogsLocation extends Shape
{
    /**
     * @param array{
     *     groupName?: string|null,
     *     streamName?: string|null,
     *     deepLink?: string|null,
     *     s3DeepLink?: string|null,
     *     cloudWatchLogsArn?: string|null,
     *     s3LogsArn?: string|null,
     *     cloudWatchLogs?: CloudWatchLogsConfig|null,
     *     s3Logs?: S3LogsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
