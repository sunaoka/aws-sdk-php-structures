<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ephemerisData
 * @property S3Object|null $sourceS3Object
 */
class EphemerisDescription extends Shape
{
    /**
     * @param array{
     *     ephemerisData?: string|null,
     *     sourceS3Object?: S3Object|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
