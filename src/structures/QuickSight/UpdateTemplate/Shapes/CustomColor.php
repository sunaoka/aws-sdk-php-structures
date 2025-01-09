<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldValue
 * @property string $Color
 * @property 'EMPTY'|'NULL'|'OTHER' $SpecialValue
 */
class CustomColor extends Shape
{
    /**
     * @param array{
     *     FieldValue?: string,
     *     Color: string,
     *     SpecialValue?: 'EMPTY'|'NULL'|'OTHER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
