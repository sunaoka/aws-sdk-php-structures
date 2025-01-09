<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'TIMED_OUT'|'CANCELLED'|'COMPLETED' $value
 */
class CisTargetStatusFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: 'TIMED_OUT'|'CANCELLED'|'COMPLETED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
