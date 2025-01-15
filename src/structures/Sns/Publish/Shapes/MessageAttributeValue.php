<?php

namespace Sunaoka\Aws\Structures\Sns\Publish\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataType
 * @property string|null $StringValue
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $BinaryValue
 */
class MessageAttributeValue extends Shape
{
    /**
     * @param array{
     *     DataType: string,
     *     StringValue?: string|null,
     *     BinaryValue?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
