<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgressiveDialerConfig $progressiveDialerConfig
 * @property PredictiveDialerConfig $predictiveDialerConfig
 * @property AgentlessDialerConfig $agentlessDialerConfig
 */
class DialerConfig extends Shape
{
    /**
     * @param array{
     *     progressiveDialerConfig?: ProgressiveDialerConfig,
     *     predictiveDialerConfig?: PredictiveDialerConfig,
     *     agentlessDialerConfig?: AgentlessDialerConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
