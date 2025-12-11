<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $bandwidthAllocation
 * @property TimeoutConfig $timeoutConfig
 * @property list<'DISCARD'>|null $agentActions
 */
class PreviewConfig extends Shape
{
    /**
     * @param array{
     *     bandwidthAllocation: double,
     *     timeoutConfig: TimeoutConfig,
     *     agentActions?: list<'DISCARD'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
