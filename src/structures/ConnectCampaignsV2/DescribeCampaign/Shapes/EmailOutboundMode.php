<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentlessConfig $agentless
 */
class EmailOutboundMode extends Shape
{
    /**
     * @param array{agentless?: AgentlessConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
