<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEGATION'|'PAST_HISTORY' $Name
 * @property float $Score
 */
class RxNormTrait extends Shape
{
    /**
     * @param array{
     *     Name?: 'NEGATION'|'PAST_HISTORY',
     *     Score?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
