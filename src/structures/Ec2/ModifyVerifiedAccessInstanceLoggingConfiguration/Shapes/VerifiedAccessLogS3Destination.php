<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property VerifiedAccessLogDeliveryStatus $DeliveryStatus
 * @property string $BucketName
 * @property string $Prefix
 * @property string $BucketOwner
 */
class VerifiedAccessLogS3Destination extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     DeliveryStatus?: VerifiedAccessLogDeliveryStatus,
     *     BucketName?: string,
     *     Prefix?: string,
     *     BucketOwner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
