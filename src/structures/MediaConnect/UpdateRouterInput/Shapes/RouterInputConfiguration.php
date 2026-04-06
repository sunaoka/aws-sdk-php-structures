<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardRouterInputConfiguration|null $Standard
 * @property FailoverRouterInputConfiguration|null $Failover
 * @property MergeRouterInputConfiguration|null $Merge
 * @property MediaConnectFlowRouterInputConfiguration|null $MediaConnectFlow
 */
class RouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardRouterInputConfiguration|null,
     *     Failover?: FailoverRouterInputConfiguration|null,
     *     Merge?: MergeRouterInputConfiguration|null,
     *     MediaConnectFlow?: MediaConnectFlowRouterInputConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
