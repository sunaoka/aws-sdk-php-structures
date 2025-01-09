<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetCalculatedAttributeForProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CalculatedAttributeName
 * @property string $DisplayName
 * @property string $IsDataPartial
 * @property string $ProfileId
 * @property string $Value
 */
class CalculatedAttributeValue extends Shape
{
    /**
     * @param array{
     *     CalculatedAttributeName?: string,
     *     DisplayName?: string,
     *     IsDataPartial?: string,
     *     ProfileId?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
