<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOLID'|'DASHED'|'DOTTED' $Pattern
 * @property string $Color
 */
class ReferenceLineStyleConfiguration extends Shape
{
    /**
     * @param array{
     *     Pattern?: 'SOLID'|'DASHED'|'DOTTED',
     *     Color?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
