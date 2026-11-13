<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BALANCED'|'LOW_LATENCY' $RecoveryLatencyMode
 * @property 'IMMEDIATE'|'KEY_FRAME'|null $SwitchingMode
 * @property FabricSwitchingConfiguration|null $SwitchingConfiguration
 */
class FabricConfiguration extends Shape
{
    /**
     * @param array{
     *     RecoveryLatencyMode: 'BALANCED'|'LOW_LATENCY',
     *     SwitchingMode?: 'IMMEDIATE'|'KEY_FRAME'|null,
     *     SwitchingConfiguration?: FabricSwitchingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
