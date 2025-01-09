<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetLinkAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StringValue
 * @property string $BinaryValue
 * @property bool $BooleanValue
 * @property string $NumberValue
 * @property \Aws\Api\DateTimeResult $DatetimeValue
 */
class TypedAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string,
     *     BinaryValue?: string,
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
