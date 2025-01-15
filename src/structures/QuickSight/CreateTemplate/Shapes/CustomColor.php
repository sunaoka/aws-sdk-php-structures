<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldValue
 * @property string $Color
 * @property 'EMPTY'|'NULL'|'OTHER'|null $SpecialValue
 */
class CustomColor extends Shape
{
    /**
     * @param array{
     *     FieldValue?: string|null,
     *     Color: string,
     *     SpecialValue?: 'EMPTY'|'NULL'|'OTHER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
