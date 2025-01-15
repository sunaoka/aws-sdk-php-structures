<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnectionLoa\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $loaContent
 * @property 'application/pdf'|null $loaContentType
 */
class Loa extends Shape
{
    /**
     * @param array{
     *     loaContent?: \Psr\Http\Message\StreamInterface|null,
     *     loaContentType?: 'application/pdf'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
