<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StringValue
 * @property list<string> $StringListValue
 * @property int $LongValue
 * @property \Aws\Api\DateTimeResult $DateValue
 */
class DocumentAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string,
     *     StringListValue?: list<string>,
     *     LongValue?: int,
     *     DateValue?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
