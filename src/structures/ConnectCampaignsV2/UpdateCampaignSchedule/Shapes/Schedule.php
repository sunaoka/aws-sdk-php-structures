<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $refreshFrequency
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     refreshFrequency?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
