<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $contentType
 */
class CommandPayload extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     contentType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
