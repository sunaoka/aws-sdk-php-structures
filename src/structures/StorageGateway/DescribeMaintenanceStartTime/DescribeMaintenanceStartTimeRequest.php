<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeMaintenanceStartTime;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class DescribeMaintenanceStartTimeRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
