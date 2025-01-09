<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateBandwidthRateLimitSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property list<Shapes\BandwidthRateLimitInterval> $BandwidthRateLimitIntervals
 */
class UpdateBandwidthRateLimitScheduleRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     BandwidthRateLimitIntervals: list<Shapes\BandwidthRateLimitInterval>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
