<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $s3Object
 * @property list<TLEData>|null $tleData
 */
class TLEEphemeris extends Shape
{
    /**
     * @param array{
     *     s3Object?: S3Object|null,
     *     tleData?: list<TLEData>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
