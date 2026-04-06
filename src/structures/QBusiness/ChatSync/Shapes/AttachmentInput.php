<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $data
 * @property string|null $name
 * @property CopyFromSource|null $copyFrom
 */
class AttachmentInput extends Shape
{
    /**
     * @param array{
     *     data?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     name?: string|null,
     *     copyFrom?: CopyFromSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
