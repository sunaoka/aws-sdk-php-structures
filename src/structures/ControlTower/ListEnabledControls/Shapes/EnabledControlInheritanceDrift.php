<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'|null $status
 */
class EnabledControlInheritanceDrift extends Shape
{
    /**
     * @param array{status?: 'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
