<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $BinaryValue
 * @property list<string>|null $StringListValues
 * @property list<string|resource|\Psr\Http\Message\StreamInterface>|null $BinaryListValues
 * @property string $DataType
 */
class MessageAttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     BinaryValue?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     StringListValues?: list<string>|null,
     *     BinaryListValues?: list<string|resource|\Psr\Http\Message\StreamInterface>|null,
     *     DataType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
