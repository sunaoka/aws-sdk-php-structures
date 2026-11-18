<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnabledBaselineInheritanceDrift|null $inheritance
 * @property EnabledBaselineSourceDrift|null $source
 */
class EnabledBaselineDriftTypes extends Shape
{
    /**
     * @param array{
     *     inheritance?: EnabledBaselineInheritanceDrift|null,
     *     source?: EnabledBaselineSourceDrift|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
