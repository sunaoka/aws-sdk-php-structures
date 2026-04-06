<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutBandwidthRateLimitSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BandwidthRateLimitInterval> $BandwidthRateLimitIntervals
 * @property string $GatewayArn
 */
class PutBandwidthRateLimitScheduleRequest extends Request
{
    /**
     * @param array{
     *     BandwidthRateLimitIntervals: list<Shapes\BandwidthRateLimitInterval>,
     *     GatewayArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
