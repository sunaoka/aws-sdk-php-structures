<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $Bytes
 * @property S3Object|null $S3Object
 * @property BoundingBox|null $BoundingBox
 */
class AuditImage extends Shape
{
    /**
     * @param array{
     *     Bytes?: \Psr\Http\Message\StreamInterface|null,
     *     S3Object?: S3Object|null,
     *     BoundingBox?: BoundingBox|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
