<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $bandwidthAllocation
 * @property double|null $dialingCapacity
 */
class ProgressiveDialerConfig extends Shape
{
    /**
     * @param array{
     *     bandwidthAllocation: double,
     *     dialingCapacity?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
