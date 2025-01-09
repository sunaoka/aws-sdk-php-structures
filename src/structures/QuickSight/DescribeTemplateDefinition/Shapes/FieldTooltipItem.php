<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string $Label
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property 'BOTH'|'BAR'|'LINE' $TooltipTarget
 */
class FieldTooltipItem extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Label?: string,
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     TooltipTarget?: 'BOTH'|'BAR'|'LINE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
