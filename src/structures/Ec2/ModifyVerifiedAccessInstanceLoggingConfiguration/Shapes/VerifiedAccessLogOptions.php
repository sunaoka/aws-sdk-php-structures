<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VerifiedAccessLogS3DestinationOptions $S3
 * @property VerifiedAccessLogCloudWatchLogsDestinationOptions $CloudWatchLogs
 * @property VerifiedAccessLogKinesisDataFirehoseDestinationOptions $KinesisDataFirehose
 * @property string $LogVersion
 * @property bool $IncludeTrustContext
 */
class VerifiedAccessLogOptions extends Shape
{
    /**
     * @param array{
     *     S3?: VerifiedAccessLogS3DestinationOptions,
     *     CloudWatchLogs?: VerifiedAccessLogCloudWatchLogsDestinationOptions,
     *     KinesisDataFirehose?: VerifiedAccessLogKinesisDataFirehoseDestinationOptions,
     *     LogVersion?: string,
     *     IncludeTrustContext?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
