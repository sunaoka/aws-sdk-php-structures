<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldId
 * @property string|null $FieldValue
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 */
class DataPathLabelType extends Shape
{
    /**
     * @param array{
     *     FieldId?: string|null,
     *     FieldValue?: string|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
