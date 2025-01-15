<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $oemData
 * @property S3Object|null $s3Object
 */
class OEMEphemeris extends Shape
{
    /**
     * @param array{
     *     oemData?: string|null,
     *     s3Object?: S3Object|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
