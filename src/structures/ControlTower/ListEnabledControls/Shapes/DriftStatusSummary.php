<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'|null $driftStatus
 * @property EnabledControlDriftTypes|null $types
 */
class DriftStatusSummary extends Shape
{
    /**
     * @param array{
     *     driftStatus?: 'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'|null,
     *     types?: EnabledControlDriftTypes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
