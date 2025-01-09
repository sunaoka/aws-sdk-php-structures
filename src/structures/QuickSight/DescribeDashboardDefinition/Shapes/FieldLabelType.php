<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 */
class FieldLabelType extends Shape
{
    /**
     * @param array{
     *     FieldId?: string,
     *     Visibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
