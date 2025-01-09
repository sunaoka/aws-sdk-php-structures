<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string $PositiveColor
 * @property string $NegativeColor
 */
class DataBarsOptions extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     PositiveColor?: string,
     *     NegativeColor?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
