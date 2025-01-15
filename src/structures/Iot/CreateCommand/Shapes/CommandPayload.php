<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $content
 * @property string|null $contentType
 */
class CommandPayload extends Shape
{
    /**
     * @param array{
     *     content?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     contentType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
