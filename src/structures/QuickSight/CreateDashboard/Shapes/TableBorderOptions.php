<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Color
 * @property int<1, 4>|null $Thickness
 * @property 'NONE'|'SOLID'|null $Style
 */
class TableBorderOptions extends Shape
{
    /**
     * @param array{
     *     Color?: string|null,
     *     Thickness?: int<1, 4>|null,
     *     Style?: 'NONE'|'SOLID'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
