<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeAvailabilityMonitorTest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property 'COMPLETE'|'FAILED'|'PENDING' $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class DescribeAvailabilityMonitorTestResponse extends Response
{
}
