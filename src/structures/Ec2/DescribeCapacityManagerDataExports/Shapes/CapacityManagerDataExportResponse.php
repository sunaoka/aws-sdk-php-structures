<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityManagerDataExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityManagerDataExportId
 * @property string|null $S3BucketName
 * @property string|null $S3BucketPrefix
 * @property 'hourly'|null $Schedule
 * @property 'csv'|'parquet'|null $OutputFormat
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property 'pending'|'in-progress'|'delivered'|'failed'|null $LatestDeliveryStatus
 * @property string|null $LatestDeliveryStatusMessage
 * @property string|null $LatestDeliveryS3LocationUri
 * @property \Aws\Api\DateTimeResult|null $LatestDeliveryTime
 * @property list<Tag>|null $Tags
 */
class CapacityManagerDataExportResponse extends Shape
{
    /**
     * @param array{
     *     CapacityManagerDataExportId?: string|null,
     *     S3BucketName?: string|null,
     *     S3BucketPrefix?: string|null,
     *     Schedule?: 'hourly'|null,
     *     OutputFormat?: 'csv'|'parquet'|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     LatestDeliveryStatus?: 'pending'|'in-progress'|'delivered'|'failed'|null,
     *     LatestDeliveryStatusMessage?: string|null,
     *     LatestDeliveryS3LocationUri?: string|null,
     *     LatestDeliveryTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
