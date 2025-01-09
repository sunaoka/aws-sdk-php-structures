<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bytes
 * @property S3Object $S3Object
 */
class Image extends Shape
{
    /**
     * @param array{
     *     Bytes?: string,
     *     S3Object?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
