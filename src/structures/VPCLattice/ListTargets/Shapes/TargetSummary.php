<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property int<1, 65535> $port
 * @property string $reasonCode
 * @property 'DRAINING'|'UNAVAILABLE'|'HEALTHY'|'UNHEALTHY'|'INITIAL'|'UNUSED' $status
 */
class TargetSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     port?: int<1, 65535>,
     *     reasonCode?: string,
     *     status?: 'DRAINING'|'UNAVAILABLE'|'HEALTHY'|'UNHEALTHY'|'INITIAL'|'UNUSED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
