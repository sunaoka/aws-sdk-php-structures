<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredictiveDialerConfig|null $predictiveDialerConfig
 * @property ProgressiveDialerConfig|null $progressiveDialerConfig
 */
class DialerConfig extends Shape
{
    /**
     * @param array{
     *     predictiveDialerConfig?: PredictiveDialerConfig|null,
     *     progressiveDialerConfig?: ProgressiveDialerConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
