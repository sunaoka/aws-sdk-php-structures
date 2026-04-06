<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignDialerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $bandwidthAllocation
 */
class ProgressiveDialerConfig extends Shape
{
    /**
     * @param array{bandwidthAllocation: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
