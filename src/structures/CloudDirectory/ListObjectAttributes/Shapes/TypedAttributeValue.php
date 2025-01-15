<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property \Psr\Http\Message\StreamInterface|null $BinaryValue
 * @property bool|null $BooleanValue
 * @property string|null $NumberValue
 * @property \Aws\Api\DateTimeResult|null $DatetimeValue
 */
class TypedAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     BinaryValue?: \Psr\Http\Message\StreamInterface|null,
     *     BooleanValue?: bool|null,
     *     NumberValue?: string|null,
     *     DatetimeValue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
