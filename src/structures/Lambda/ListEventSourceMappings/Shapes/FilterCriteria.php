<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Filter>|null $Filters
 */
class FilterCriteria extends Shape
{
    /**
     * @param array{Filters?: list<Filter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
