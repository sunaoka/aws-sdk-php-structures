<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateLinkAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StringValue
 * @property string|resource|\Psr\Http\Message\StreamInterface $BinaryValue
 * @property bool $BooleanValue
 * @property string $NumberValue
 * @property \Aws\Api\DateTimeResult $DatetimeValue
 */
class TypedAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string,
     *     BinaryValue?: string|resource|\Psr\Http\Message\StreamInterface,
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
