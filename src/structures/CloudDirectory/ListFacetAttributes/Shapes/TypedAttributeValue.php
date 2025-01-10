<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListFacetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StringValue
 * @property \Psr\Http\Message\StreamInterface $BinaryValue
 * @property bool $BooleanValue
 * @property string $NumberValue
 * @property \Aws\Api\DateTimeResult $DatetimeValue
 */
class TypedAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string,
     *     BinaryValue?: \Psr\Http\Message\StreamInterface,
     *     BooleanValue?: bool,
     *     NumberValue?: string,
     *     DatetimeValue?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
