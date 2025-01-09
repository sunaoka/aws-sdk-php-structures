<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property VerifiedAccessLogDeliveryStatus $DeliveryStatus
 * @property string $DeliveryStream
 */
class VerifiedAccessLogKinesisDataFirehoseDestination extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     DeliveryStatus?: VerifiedAccessLogDeliveryStatus,
     *     DeliveryStream?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
