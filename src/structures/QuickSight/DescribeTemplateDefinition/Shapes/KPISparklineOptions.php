<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property 'LINE'|'AREA' $Type
 * @property string $Color
 * @property 'HIDDEN'|'VISIBLE' $TooltipVisibility
 */
class KPISparklineOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     Type: 'LINE'|'AREA',
     *     Color?: string,
     *     TooltipVisibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
