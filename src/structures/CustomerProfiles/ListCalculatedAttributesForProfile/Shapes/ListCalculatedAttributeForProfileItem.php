<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListCalculatedAttributesForProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CalculatedAttributeName
 * @property string $DisplayName
 * @property string $IsDataPartial
 * @property string $Value
 */
class ListCalculatedAttributeForProfileItem extends Shape
{
    /**
     * @param array{
     *     CalculatedAttributeName?: string,
     *     DisplayName?: string,
     *     IsDataPartial?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
