<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceIdFilter|null $instanceIdFilter
 */
class CampaignFilters extends Shape
{
    /**
     * @param array{instanceIdFilter?: InstanceIdFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
