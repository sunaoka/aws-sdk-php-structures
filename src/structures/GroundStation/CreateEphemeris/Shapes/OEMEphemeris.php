<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $oemData
 * @property S3Object $s3Object
 */
class OEMEphemeris extends Shape
{
    /**
     * @param array{
     *     oemData?: string,
     *     s3Object?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
