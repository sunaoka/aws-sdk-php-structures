<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetBandwidthRateLimitSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 */
class GetBandwidthRateLimitScheduleRequest extends Request
{
    /**
     * @param array{GatewayArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
