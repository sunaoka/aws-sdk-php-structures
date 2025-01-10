<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string $name
 * @property CopyFromSource $copyFrom
 */
class AttachmentInput extends Shape
{
    /**
     * @param array{
     *     data?: string|resource|\Psr\Http\Message\StreamInterface,
     *     name?: string,
     *     copyFrom?: CopyFromSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
