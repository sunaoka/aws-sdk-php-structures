<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $content
 * @property string $contentType
 */
class CommandPayload extends Shape
{
    /**
     * @param array{
     *     content?: \Psr\Http\Message\StreamInterface,
     *     contentType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
