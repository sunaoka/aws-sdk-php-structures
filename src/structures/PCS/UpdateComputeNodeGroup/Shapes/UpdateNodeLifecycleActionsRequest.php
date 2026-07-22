<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NodeLifecycleStages $stages
 * @property 'CACHE_ONCE'|'REFRESH_ON_REBOOT'|null $scriptCachingPolicy
 */
class UpdateNodeLifecycleActionsRequest extends Shape
{
    /**
     * @param array{
     *     stages: NodeLifecycleStages,
     *     scriptCachingPolicy?: 'CACHE_ONCE'|'REFRESH_ON_REBOOT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
