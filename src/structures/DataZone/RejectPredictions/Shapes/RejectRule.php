<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE'|null $rule
 * @property float|null $threshold
 */
class RejectRule extends Shape
{
    /**
     * @param array{
     *     rule?: 'ALL'|'NONE'|null,
     *     threshold?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
