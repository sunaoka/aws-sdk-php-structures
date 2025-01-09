<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VerifiedAccessLogS3Destination $S3
 * @property VerifiedAccessLogCloudWatchLogsDestination $CloudWatchLogs
 * @property VerifiedAccessLogKinesisDataFirehoseDestination $KinesisDataFirehose
 * @property string $LogVersion
 * @property bool $IncludeTrustContext
 */
class VerifiedAccessLogs extends Shape
{
    /**
     * @param array{
     *     S3?: VerifiedAccessLogS3Destination,
     *     CloudWatchLogs?: VerifiedAccessLogCloudWatchLogsDestination,
     *     KinesisDataFirehose?: VerifiedAccessLogKinesisDataFirehoseDestination,
     *     LogVersion?: string,
     *     IncludeTrustContext?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
