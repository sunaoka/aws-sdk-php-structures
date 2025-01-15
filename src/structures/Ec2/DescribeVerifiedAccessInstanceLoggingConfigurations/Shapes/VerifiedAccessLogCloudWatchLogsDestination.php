<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property VerifiedAccessLogDeliveryStatus|null $DeliveryStatus
 * @property string|null $LogGroup
 */
class VerifiedAccessLogCloudWatchLogsDestination extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     DeliveryStatus?: VerifiedAccessLogDeliveryStatus|null,
     *     LogGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
