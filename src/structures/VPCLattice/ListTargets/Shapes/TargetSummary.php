<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property int<1, 65535>|null $port
 * @property string|null $reasonCode
 * @property 'DRAINING'|'UNAVAILABLE'|'HEALTHY'|'UNHEALTHY'|'INITIAL'|'UNUSED'|null $status
 */
class TargetSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     port?: int<1, 65535>|null,
     *     reasonCode?: string|null,
     *     status?: 'DRAINING'|'UNAVAILABLE'|'HEALTHY'|'UNHEALTHY'|'INITIAL'|'UNUSED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
