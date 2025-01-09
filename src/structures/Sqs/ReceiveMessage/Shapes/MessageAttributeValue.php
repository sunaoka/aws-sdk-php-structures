<?php

namespace Sunaoka\Aws\Structures\Sqs\ReceiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StringValue
 * @property string $BinaryValue
 * @property list<string> $StringListValues
 * @property list<string> $BinaryListValues
 * @property string $DataType
 */
class MessageAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string,
     *     BinaryValue?: string,
     *     StringListValues?: list<string>,
     *     BinaryListValues?: list<string>,
     *     DataType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
