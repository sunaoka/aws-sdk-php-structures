<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $bandwidthAllocation
 * @property double $dialingCapacity
 */
class ProgressiveDialerConfig extends Shape
{
    /**
     * @param array{
     *     bandwidthAllocation: double,
     *     dialingCapacity?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
