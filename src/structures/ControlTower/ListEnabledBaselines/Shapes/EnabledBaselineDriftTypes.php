<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnabledBaselineInheritanceDrift|null $inheritance
 */
class EnabledBaselineDriftTypes extends Shape
{
    /**
     * @param array{inheritance?: EnabledBaselineInheritanceDrift|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
