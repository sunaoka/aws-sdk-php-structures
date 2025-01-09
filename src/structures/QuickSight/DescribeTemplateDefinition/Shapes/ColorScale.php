<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataColor> $Colors
 * @property 'DISCRETE'|'GRADIENT' $ColorFillType
 * @property DataColor $NullValueColor
 */
class ColorScale extends Shape
{
    /**
     * @param array{
     *     Colors: list<DataColor>,
     *     ColorFillType: 'DISCRETE'|'GRADIENT',
     *     NullValueColor?: DataColor
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
