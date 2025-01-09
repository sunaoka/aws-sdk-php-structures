<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $dialingCapacity
 */
class AgentlessDialerConfig extends Shape
{
    /**
     * @param array{dialingCapacity?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
