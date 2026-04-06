<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $BooleanValue
 * @property double|null $DoubleValue
 * @property EmptyFieldValue|null $EmptyValue
 * @property string|null $StringValue
 */
class FieldValueUnion extends Shape
{
    /**
     * @param array{
     *     BooleanValue?: bool|null,
     *     DoubleValue?: double|null,
     *     EmptyValue?: EmptyFieldValue|null,
     *     StringValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
