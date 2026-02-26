<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutBandwidthRateLimitSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 * @property list<Shapes\BandwidthRateLimitInterval> $BandwidthRateLimitIntervals
 */
class PutBandwidthRateLimitScheduleRequest extends Request
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     BandwidthRateLimitIntervals: list<Shapes\BandwidthRateLimitInterval>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
