<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgressiveConfig $progressive
 * @property PredictiveConfig $predictive
 * @property AgentlessConfig $agentless
 */
class TelephonyOutboundMode extends Shape
{
    /**
     * @param array{
     *     progressive?: ProgressiveConfig,
     *     predictive?: PredictiveConfig,
     *     agentless?: AgentlessConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
