<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RestrictedPeriod> $restrictedPeriodList
 */
class RestrictedPeriods extends Shape
{
    /**
     * @param array{restrictedPeriodList?: list<RestrictedPeriod>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
