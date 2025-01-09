<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC' $status
 */
class LandingZoneDriftStatusSummary extends Shape
{
    /**
     * @param array{status?: 'DRIFTED'|'IN_SYNC'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
