<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardRouterInputStreamDetails|null $Standard
 * @property FailoverRouterInputStreamDetails|null $Failover
 * @property MergeRouterInputStreamDetails|null $Merge
 * @property MediaConnectFlowRouterInputStreamDetails|null $MediaConnectFlow
 */
class RouterInputStreamDetails extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardRouterInputStreamDetails|null,
     *     Failover?: FailoverRouterInputStreamDetails|null,
     *     Merge?: MergeRouterInputStreamDetails|null,
     *     MediaConnectFlow?: MediaConnectFlowRouterInputStreamDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
