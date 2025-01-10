<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataType
 * @property string $StringValue
 * @property string|resource|\Psr\Http\Message\StreamInterface $BinaryValue
 */
class MessageAttributeValue extends Shape
{
    /**
     * @param array{
     *     DataType: string,
     *     StringValue?: string,
     *     BinaryValue?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
