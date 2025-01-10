<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $Bytes
 * @property S3Object $S3Object
 * @property BoundingBox $BoundingBox
 */
class AuditImage extends Shape
{
    /**
     * @param array{
     *     Bytes?: \Psr\Http\Message\StreamInterface,
     *     S3Object?: S3Object,
     *     BoundingBox?: BoundingBox
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
