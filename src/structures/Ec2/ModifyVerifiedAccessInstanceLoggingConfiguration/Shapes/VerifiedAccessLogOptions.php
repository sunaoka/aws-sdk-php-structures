<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VerifiedAccessLogS3DestinationOptions|null $S3
 * @property VerifiedAccessLogCloudWatchLogsDestinationOptions|null $CloudWatchLogs
 * @property VerifiedAccessLogKinesisDataFirehoseDestinationOptions|null $KinesisDataFirehose
 * @property string|null $LogVersion
 * @property bool|null $IncludeTrustContext
 */
class VerifiedAccessLogOptions extends Shape
{
    /**
     * @param array{
     *     S3?: VerifiedAccessLogS3DestinationOptions|null,
     *     CloudWatchLogs?: VerifiedAccessLogCloudWatchLogsDestinationOptions|null,
     *     KinesisDataFirehose?: VerifiedAccessLogKinesisDataFirehoseDestinationOptions|null,
     *     LogVersion?: string|null,
     *     IncludeTrustContext?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
