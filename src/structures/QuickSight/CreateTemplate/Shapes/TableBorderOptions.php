<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Color
 * @property int<1, 4> $Thickness
 * @property 'NONE'|'SOLID' $Style
 */
class TableBorderOptions extends Shape
{
    /**
     * @param array{
     *     Color?: string,
     *     Thickness?: int<1, 4>,
     *     Style?: 'NONE'|'SOLID'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
