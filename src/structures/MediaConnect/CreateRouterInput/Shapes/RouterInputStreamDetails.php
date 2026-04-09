<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardRouterInputStreamDetails|null $Standard
 * @property MediaLiveChannelRouterInputStreamDetails|null $MediaLiveChannel
 * @property FailoverRouterInputStreamDetails|null $Failover
 * @property MediaConnectFlowRouterInputStreamDetails|null $MediaConnectFlow
 * @property MergeRouterInputStreamDetails|null $Merge
 */
class RouterInputStreamDetails extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardRouterInputStreamDetails|null,
     *     MediaLiveChannel?: MediaLiveChannelRouterInputStreamDetails|null,
     *     Failover?: FailoverRouterInputStreamDetails|null,
     *     MediaConnectFlow?: MediaConnectFlowRouterInputStreamDetails|null,
     *     Merge?: MergeRouterInputStreamDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
