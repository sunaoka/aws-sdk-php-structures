<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenHours $openHours
 * @property RestrictedPeriods|null $restrictedPeriods
 */
class TimeWindow extends Shape
{
    /**
     * @param array{
     *     openHours: OpenHours,
     *     restrictedPeriods?: RestrictedPeriods|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
