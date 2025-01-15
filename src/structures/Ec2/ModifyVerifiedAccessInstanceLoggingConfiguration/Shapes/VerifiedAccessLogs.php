<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VerifiedAccessLogS3Destination|null $S3
 * @property VerifiedAccessLogCloudWatchLogsDestination|null $CloudWatchLogs
 * @property VerifiedAccessLogKinesisDataFirehoseDestination|null $KinesisDataFirehose
 * @property string|null $LogVersion
 * @property bool|null $IncludeTrustContext
 */
class VerifiedAccessLogs extends Shape
{
    /**
     * @param array{
     *     S3?: VerifiedAccessLogS3Destination|null,
     *     CloudWatchLogs?: VerifiedAccessLogCloudWatchLogsDestination|null,
     *     KinesisDataFirehose?: VerifiedAccessLogKinesisDataFirehoseDestination|null,
     *     LogVersion?: string|null,
     *     IncludeTrustContext?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
