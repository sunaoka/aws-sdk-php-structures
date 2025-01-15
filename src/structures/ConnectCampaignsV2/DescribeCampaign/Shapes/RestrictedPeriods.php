<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RestrictedPeriod>|null $restrictedPeriodList
 */
class RestrictedPeriods extends Shape
{
    /**
     * @param array{restrictedPeriodList?: list<RestrictedPeriod>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
