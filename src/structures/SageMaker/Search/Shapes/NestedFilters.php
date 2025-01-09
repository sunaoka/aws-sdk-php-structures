<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NestedPropertyName
 * @property list<Filter> $Filters
 */
class NestedFilters extends Shape
{
    /**
     * @param array{
     *     NestedPropertyName: string,
     *     Filters: list<Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
