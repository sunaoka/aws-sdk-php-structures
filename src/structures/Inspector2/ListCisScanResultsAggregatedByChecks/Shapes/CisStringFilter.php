<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'PREFIX'|'NOT_EQUALS' $comparison
 * @property string $value
 */
class CisStringFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS'|'PREFIX'|'NOT_EQUALS',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
