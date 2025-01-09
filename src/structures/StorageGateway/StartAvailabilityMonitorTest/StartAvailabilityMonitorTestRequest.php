<?php

namespace Sunaoka\Aws\Structures\StorageGateway\StartAvailabilityMonitorTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class StartAvailabilityMonitorTestRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
