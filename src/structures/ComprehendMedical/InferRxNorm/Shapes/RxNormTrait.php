<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEGATION'|'PAST_HISTORY'|null $Name
 * @property float|null $Score
 */
class RxNormTrait extends Shape
{
    /**
     * @param array{
     *     Name?: 'NEGATION'|'PAST_HISTORY'|null,
     *     Score?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
