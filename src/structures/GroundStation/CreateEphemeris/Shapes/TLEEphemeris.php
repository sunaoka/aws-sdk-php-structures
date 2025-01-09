<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $s3Object
 * @property list<TLEData> $tleData
 */
class TLEEphemeris extends Shape
{
    /**
     * @param array{
     *     s3Object?: S3Object,
     *     tleData?: list<TLEData>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
