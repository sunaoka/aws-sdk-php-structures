<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeAvailabilityMonitorTest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property 'COMPLETE'|'FAILED'|'PENDING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class DescribeAvailabilityMonitorTestResponse extends Response
{
}
