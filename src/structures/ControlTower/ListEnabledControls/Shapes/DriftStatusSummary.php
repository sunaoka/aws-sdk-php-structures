<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN' $driftStatus
 */
class DriftStatusSummary extends Shape
{
    /**
     * @param array{driftStatus?: 'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
