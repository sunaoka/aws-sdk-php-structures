<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_SYNC'|'DRIFTED'|null $status
 */
class EnabledBaselineInheritanceDrift extends Shape
{
    /**
     * @param array{status?: 'IN_SYNC'|'DRIFTED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
