<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SoftwareCompositeFilter>|null $CompositeFilters
 * @property 'AND'|'OR'|null $CompositeOperator
 */
class SoftwareFilters extends Shape
{
    /**
     * @param array{
     *     CompositeFilters?: list<SoftwareCompositeFilter>|null,
     *     CompositeOperator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
