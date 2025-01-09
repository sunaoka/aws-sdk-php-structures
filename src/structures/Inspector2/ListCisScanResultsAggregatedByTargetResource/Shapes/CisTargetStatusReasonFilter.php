<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'SCAN_IN_PROGRESS'|'UNSUPPORTED_OS'|'SSM_UNMANAGED' $value
 */
class CisTargetStatusReasonFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: 'SCAN_IN_PROGRESS'|'UNSUPPORTED_OS'|'SSM_UNMANAGED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
