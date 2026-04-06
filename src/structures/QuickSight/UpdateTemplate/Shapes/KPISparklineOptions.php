<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property 'LINE'|'AREA' $Type
 * @property string|null $Color
 * @property 'HIDDEN'|'VISIBLE'|null $TooltipVisibility
 */
class KPISparklineOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Type: 'LINE'|'AREA',
     *     Color?: string|null,
     *     TooltipVisibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
