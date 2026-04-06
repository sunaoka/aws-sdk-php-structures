<?php

namespace Sunaoka\Aws\Structures\BCMRecommendedActions\ListRecommendedActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ActionFilter>|null $actions
 */
class RequestFilter extends Shape
{
    /**
     * @param array{actions?: list<ActionFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
