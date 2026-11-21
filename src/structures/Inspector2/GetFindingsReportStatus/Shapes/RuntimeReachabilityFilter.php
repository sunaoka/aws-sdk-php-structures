<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetFindingsReportStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'NOT_EQUALS' $comparison
 * @property 'REACHABLE'|'NOT_REACHABLE'|'UNKNOWN' $value
 */
class RuntimeReachabilityFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS'|'NOT_EQUALS',
     *     value: 'REACHABLE'|'NOT_REACHABLE'|'UNKNOWN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
