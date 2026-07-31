<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $bandwidthAllocation
 * @property list<PacingStrategy>|null $pacingStrategies
 */
class PredictiveConfig extends Shape
{
    /**
     * @param array{
     *     bandwidthAllocation: double,
     *     pacingStrategies?: list<PacingStrategy>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
