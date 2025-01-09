<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE' $rule
 * @property float $threshold
 */
class AcceptRule extends Shape
{
    /**
     * @param array{
     *     rule?: 'ALL'|'NONE',
     *     threshold?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
