<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileName
 * @property \Psr\Http\Message\StreamInterface|null $data
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     fileName?: string|null,
     *     data?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
