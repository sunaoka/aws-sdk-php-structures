<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string|null $Label
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property 'BOTH'|'BAR'|'LINE'|null $TooltipTarget
 */
class FieldTooltipItem extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Label?: string|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     TooltipTarget?: 'BOTH'|'BAR'|'LINE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
