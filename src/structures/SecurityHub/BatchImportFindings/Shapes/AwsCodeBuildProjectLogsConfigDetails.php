<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCodeBuildProjectLogsConfigCloudWatchLogsDetails|null $CloudWatchLogs
 * @property AwsCodeBuildProjectLogsConfigS3LogsDetails|null $S3Logs
 */
class AwsCodeBuildProjectLogsConfigDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogs?: AwsCodeBuildProjectLogsConfigCloudWatchLogsDetails|null,
     *     S3Logs?: AwsCodeBuildProjectLogsConfigS3LogsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
