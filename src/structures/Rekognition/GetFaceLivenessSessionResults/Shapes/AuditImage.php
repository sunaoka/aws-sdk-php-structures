<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bytes
 * @property S3Object $S3Object
 * @property BoundingBox $BoundingBox
 */
class AuditImage extends Shape
{
    /**
     * @param array{
     *     Bytes?: string,
     *     S3Object?: S3Object,
     *     BoundingBox?: BoundingBox
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
