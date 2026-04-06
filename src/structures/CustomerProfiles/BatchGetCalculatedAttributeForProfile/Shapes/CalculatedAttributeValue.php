<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetCalculatedAttributeForProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CalculatedAttributeName
 * @property string|null $DisplayName
 * @property string|null $IsDataPartial
 * @property string|null $ProfileId
 * @property string|null $Value
 */
class CalculatedAttributeValue extends Shape
{
    /**
     * @param array{
     *     CalculatedAttributeName?: string|null,
     *     DisplayName?: string|null,
     *     IsDataPartial?: string|null,
     *     ProfileId?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
