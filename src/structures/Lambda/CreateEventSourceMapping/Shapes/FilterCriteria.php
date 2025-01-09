<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Filter> $Filters
 */
class FilterCriteria extends Shape
{
    /**
     * @param array{Filters?: list<Filter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
