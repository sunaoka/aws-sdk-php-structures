<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnabledControlInheritanceDrift|null $inheritance
 * @property EnabledControlResourceDrift|null $resource
 */
class EnabledControlDriftTypes extends Shape
{
    /**
     * @param array{
     *     inheritance?: EnabledControlInheritanceDrift|null,
     *     resource?: EnabledControlResourceDrift|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
