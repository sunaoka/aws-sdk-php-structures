<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PreEvaluationFilter>|null $AndConditions
 */
class PreEvaluationFilters extends Shape
{
    /**
     * @param array{AndConditions?: list<PreEvaluationFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
