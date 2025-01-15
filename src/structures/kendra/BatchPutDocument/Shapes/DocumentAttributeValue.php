<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property list<string>|null $StringListValue
 * @property int|null $LongValue
 * @property \Aws\Api\DateTimeResult|null $DateValue
 */
class DocumentAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     StringListValue?: list<string>|null,
     *     LongValue?: int|null,
     *     DateValue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
