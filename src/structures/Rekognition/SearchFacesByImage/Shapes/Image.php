<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFacesByImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Bytes
 * @property S3Object|null $S3Object
 */
class Image extends Shape
{
    /**
     * @param array{
     *     Bytes?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     S3Object?: S3Object|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
