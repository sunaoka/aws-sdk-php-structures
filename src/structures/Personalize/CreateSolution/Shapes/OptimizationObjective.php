<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $itemAttribute
 * @property 'LOW'|'MEDIUM'|'HIGH'|'OFF' $objectiveSensitivity
 */
class OptimizationObjective extends Shape
{
    /**
     * @param array{
     *     itemAttribute?: string,
     *     objectiveSensitivity?: 'LOW'|'MEDIUM'|'HIGH'|'OFF'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
