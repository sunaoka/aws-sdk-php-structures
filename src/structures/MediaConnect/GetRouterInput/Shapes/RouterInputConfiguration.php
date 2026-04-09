<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardRouterInputConfiguration|null $Standard
 * @property MediaLiveChannelRouterInputConfiguration|null $MediaLiveChannel
 * @property FailoverRouterInputConfiguration|null $Failover
 * @property MediaConnectFlowRouterInputConfiguration|null $MediaConnectFlow
 * @property MergeRouterInputConfiguration|null $Merge
 */
class RouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardRouterInputConfiguration|null,
     *     MediaLiveChannel?: MediaLiveChannelRouterInputConfiguration|null,
     *     Failover?: FailoverRouterInputConfiguration|null,
     *     MediaConnectFlow?: MediaConnectFlowRouterInputConfiguration|null,
     *     Merge?: MergeRouterInputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
