<?php

namespace Sunaoka\Aws\Structures\Sqs\ReceiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StringValue
 * @property \Psr\Http\Message\StreamInterface $BinaryValue
 * @property list<string> $StringListValues
 * @property list<\Psr\Http\Message\StreamInterface> $BinaryListValues
 * @property string $DataType
 */
class MessageAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string,
     *     BinaryValue?: \Psr\Http\Message\StreamInterface,
     *     StringListValues?: list<string>,
     *     BinaryListValues?: list<\Psr\Http\Message\StreamInterface>,
     *     DataType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
