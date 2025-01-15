<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string|null $PositiveColor
 * @property string|null $NegativeColor
 */
class DataBarsOptions extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     PositiveColor?: string|null,
     *     NegativeColor?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
