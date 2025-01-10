<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property \Psr\Http\Message\StreamInterface $data
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     fileName?: string,
     *     data?: \Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
