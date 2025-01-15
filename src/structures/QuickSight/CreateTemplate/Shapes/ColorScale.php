<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataColor> $Colors
 * @property 'DISCRETE'|'GRADIENT' $ColorFillType
 * @property DataColor|null $NullValueColor
 */
class ColorScale extends Shape
{
    /**
     * @param array{
     *     Colors: list<DataColor>,
     *     ColorFillType: 'DISCRETE'|'GRADIENT',
     *     NullValueColor?: DataColor|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
