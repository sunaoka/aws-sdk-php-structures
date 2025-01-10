<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Content
 * @property string $ContentType
 */
class Document extends Shape
{
    /**
     * @param array{
     *     Content: string|resource|\Psr\Http\Message\StreamInterface,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
