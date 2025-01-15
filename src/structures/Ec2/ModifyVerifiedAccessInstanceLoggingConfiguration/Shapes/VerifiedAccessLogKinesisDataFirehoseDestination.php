<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property VerifiedAccessLogDeliveryStatus|null $DeliveryStatus
 * @property string|null $DeliveryStream
 */
class VerifiedAccessLogKinesisDataFirehoseDestination extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     DeliveryStatus?: VerifiedAccessLogDeliveryStatus|null,
     *     DeliveryStream?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
