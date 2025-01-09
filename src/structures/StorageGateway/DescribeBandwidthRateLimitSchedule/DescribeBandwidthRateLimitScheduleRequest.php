<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeBandwidthRateLimitSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class DescribeBandwidthRateLimitScheduleRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
