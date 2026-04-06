<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'FAILED'|'COMPLETED'|'CANCELLED'|'IN_PROGRESS' $value
 */
class CisScanStatusFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: 'FAILED'|'COMPLETED'|'CANCELLED'|'IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
