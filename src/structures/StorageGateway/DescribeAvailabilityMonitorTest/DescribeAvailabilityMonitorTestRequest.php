<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeAvailabilityMonitorTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class DescribeAvailabilityMonitorTestRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
