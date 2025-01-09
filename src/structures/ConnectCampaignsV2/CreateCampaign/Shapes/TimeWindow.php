<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenHours $openHours
 * @property RestrictedPeriods $restrictedPeriods
 */
class TimeWindow extends Shape
{
    /**
     * @param array{
     *     openHours: OpenHours,
     *     restrictedPeriods?: RestrictedPeriods
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
