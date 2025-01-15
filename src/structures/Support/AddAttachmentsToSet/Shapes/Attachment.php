<?php

namespace Sunaoka\Aws\Structures\Support\AddAttachmentsToSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileName
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $data
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     fileName?: string|null,
     *     data?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
