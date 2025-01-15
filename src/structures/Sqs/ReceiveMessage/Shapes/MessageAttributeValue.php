<?php

namespace Sunaoka\Aws\Structures\Sqs\ReceiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property \Psr\Http\Message\StreamInterface|null $BinaryValue
 * @property list<string>|null $StringListValues
 * @property list<\Psr\Http\Message\StreamInterface>|null $BinaryListValues
 * @property string $DataType
 */
class MessageAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     BinaryValue?: \Psr\Http\Message\StreamInterface|null,
     *     StringListValues?: list<string>|null,
     *     BinaryListValues?: list<\Psr\Http\Message\StreamInterface>|null,
     *     DataType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
