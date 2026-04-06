<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE'|null $rule
 * @property float|null $threshold
 */
class AcceptRule extends Shape
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
