<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'PASSED'|'FAILED'|'SKIPPED' $value
 */
class CisFindingStatusFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: 'PASSED'|'FAILED'|'SKIPPED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
