<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOLID'|'DASHED'|'DOTTED'|null $Pattern
 * @property string|null $Color
 */
class ReferenceLineStyleConfiguration extends Shape
{
    /**
     * @param array{
     *     Pattern?: 'SOLID'|'DASHED'|'DOTTED'|null,
     *     Color?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
