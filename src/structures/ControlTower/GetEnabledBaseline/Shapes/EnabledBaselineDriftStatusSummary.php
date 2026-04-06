<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnabledBaselineDriftTypes|null $types
 */
class EnabledBaselineDriftStatusSummary extends Shape
{
    /**
     * @param array{types?: EnabledBaselineDriftTypes|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
