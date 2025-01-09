<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstanceLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property VerifiedAccessLogDeliveryStatus $DeliveryStatus
 * @property string $LogGroup
 */
class VerifiedAccessLogCloudWatchLogsDestination extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     DeliveryStatus?: VerifiedAccessLogDeliveryStatus,
     *     LogGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
