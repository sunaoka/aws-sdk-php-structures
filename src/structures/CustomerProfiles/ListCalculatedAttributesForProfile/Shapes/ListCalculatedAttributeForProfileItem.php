<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListCalculatedAttributesForProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CalculatedAttributeName
 * @property string|null $DisplayName
 * @property string|null $IsDataPartial
 * @property string|null $Value
 */
class ListCalculatedAttributeForProfileItem extends Shape
{
    /**
     * @param array{
     *     CalculatedAttributeName?: string|null,
     *     DisplayName?: string|null,
     *     IsDataPartial?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
