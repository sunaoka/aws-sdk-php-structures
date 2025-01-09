<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $bandwidthAllocation
 */
class ProgressiveConfig extends Shape
{
    /**
     * @param array{bandwidthAllocation: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
