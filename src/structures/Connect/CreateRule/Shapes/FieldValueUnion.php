<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $BooleanValue
 * @property double $DoubleValue
 * @property EmptyFieldValue $EmptyValue
 * @property string $StringValue
 */
class FieldValueUnion extends Shape
{
    /**
     * @param array{
     *     BooleanValue?: bool,
     *     DoubleValue?: double,
     *     EmptyValue?: EmptyFieldValue,
     *     StringValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
