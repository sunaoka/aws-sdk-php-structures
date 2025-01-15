<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property VerifiedAccessLogDeliveryStatus|null $DeliveryStatus
 * @property string|null $BucketName
 * @property string|null $Prefix
 * @property string|null $BucketOwner
 */
class VerifiedAccessLogS3Destination extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     DeliveryStatus?: VerifiedAccessLogDeliveryStatus|null,
     *     BucketName?: string|null,
     *     Prefix?: string|null,
     *     BucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
