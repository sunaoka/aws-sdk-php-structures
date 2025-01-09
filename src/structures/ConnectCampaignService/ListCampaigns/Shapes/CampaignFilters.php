<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceIdFilter $instanceIdFilter
 */
class CampaignFilters extends Shape
{
    /**
     * @param array{instanceIdFilter?: InstanceIdFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
