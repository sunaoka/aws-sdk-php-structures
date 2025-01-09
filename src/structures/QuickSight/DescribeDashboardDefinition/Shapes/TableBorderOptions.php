<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Color
 * @property int $Thickness
 * @property 'NONE'|'SOLID' $Style
 */
class TableBorderOptions extends Shape
{
    /**
     * @param array{
     *     Color?: string,
     *     Thickness?: int,
     *     Style?: 'NONE'|'SOLID'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
