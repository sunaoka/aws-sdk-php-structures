<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $dialingCapacity
 */
class AgentlessDialerConfig extends Shape
{
    /**
     * @param array{dialingCapacity?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
