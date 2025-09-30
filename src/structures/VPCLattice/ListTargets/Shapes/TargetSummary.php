<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property int<1, 65535>|null $port
 * @property 'DRAINING'|'UNAVAILABLE'|'HEALTHY'|'UNHEALTHY'|'INITIAL'|'UNUSED'|null $status
 * @property string|null $reasonCode
 */
class TargetSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     port?: int<1, 65535>|null,
     *     status?: 'DRAINING'|'UNAVAILABLE'|'HEALTHY'|'UNHEALTHY'|'INITIAL'|'UNUSED'|null,
     *     reasonCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
