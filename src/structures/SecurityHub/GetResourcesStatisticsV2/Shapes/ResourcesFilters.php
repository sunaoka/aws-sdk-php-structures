<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourcesCompositeFilter>|null $CompositeFilters
 * @property 'AND'|'OR'|null $CompositeOperator
 */
class ResourcesFilters extends Shape
{
    /**
     * @param array{
     *     CompositeFilters?: list<ResourcesCompositeFilter>|null,
     *     CompositeOperator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
