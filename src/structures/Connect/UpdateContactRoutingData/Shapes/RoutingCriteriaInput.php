<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RoutingCriteriaInputStep> $Steps
 */
class RoutingCriteriaInput extends Shape
{
    /**
     * @param array{Steps?: list<RoutingCriteriaInputStep>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
