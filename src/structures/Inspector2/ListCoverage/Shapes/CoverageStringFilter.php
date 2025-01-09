<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'NOT_EQUALS' $comparison
 * @property string $value
 */
class CoverageStringFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS'|'NOT_EQUALS',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
