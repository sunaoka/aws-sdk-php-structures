<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FilterCriterion> $criteria
 */
class Filter extends Shape
{
    /**
     * @param array{criteria: list<FilterCriterion>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
