<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $itemAttribute
 * @property 'LOW'|'MEDIUM'|'HIGH'|'OFF'|null $objectiveSensitivity
 */
class OptimizationObjective extends Shape
{
    /**
     * @param array{
     *     itemAttribute?: string|null,
     *     objectiveSensitivity?: 'LOW'|'MEDIUM'|'HIGH'|'OFF'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
