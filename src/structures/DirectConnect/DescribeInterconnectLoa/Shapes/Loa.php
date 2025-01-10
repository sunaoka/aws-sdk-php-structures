<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnectLoa\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $loaContent
 * @property 'application/pdf' $loaContentType
 */
class Loa extends Shape
{
    /**
     * @param array{
     *     loaContent?: \Psr\Http\Message\StreamInterface,
     *     loaContentType?: 'application/pdf'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
