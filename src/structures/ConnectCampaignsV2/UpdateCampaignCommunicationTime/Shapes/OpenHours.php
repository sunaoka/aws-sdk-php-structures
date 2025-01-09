<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<TimeRange>> $dailyHours
 */
class OpenHours extends Shape
{
    /**
     * @param array{dailyHours?: array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<TimeRange>>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
