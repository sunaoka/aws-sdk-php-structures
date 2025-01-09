<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCodeBuildProjectLogsConfigCloudWatchLogsDetails $CloudWatchLogs
 * @property AwsCodeBuildProjectLogsConfigS3LogsDetails $S3Logs
 */
class AwsCodeBuildProjectLogsConfigDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogs?: AwsCodeBuildProjectLogsConfigCloudWatchLogsDetails,
     *     S3Logs?: AwsCodeBuildProjectLogsConfigS3LogsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
