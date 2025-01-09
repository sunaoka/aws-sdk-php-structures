<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string $FieldValue
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 */
class DataPathLabelType extends Shape
{
    /**
     * @param array{
     *     FieldId?: string,
     *     FieldValue?: string,
     *     Visibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
