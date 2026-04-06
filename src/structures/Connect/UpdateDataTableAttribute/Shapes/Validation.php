<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateDataTableAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000>|null $MinLength
 * @property int<0, 1000>|null $MaxLength
 * @property int<0, 100>|null $MinValues
 * @property int<0, 100>|null $MaxValues
 * @property bool|null $IgnoreCase
 * @property double|null $Minimum
 * @property double|null $Maximum
 * @property double|null $ExclusiveMinimum
 * @property double|null $ExclusiveMaximum
 * @property double|null $MultipleOf
 * @property ValidationEnum|null $Enum
 */
class Validation extends Shape
{
    /**
     * @param array{
     *     MinLength?: int<0, 1000>|null,
     *     MaxLength?: int<0, 1000>|null,
     *     MinValues?: int<0, 100>|null,
     *     MaxValues?: int<0, 100>|null,
     *     IgnoreCase?: bool|null,
     *     Minimum?: double|null,
     *     Maximum?: double|null,
     *     ExclusiveMinimum?: double|null,
     *     ExclusiveMaximum?: double|null,
     *     MultipleOf?: double|null,
     *     Enum?: ValidationEnum|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
