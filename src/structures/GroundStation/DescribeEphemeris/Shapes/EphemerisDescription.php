<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $sourceS3Object
 * @property string|null $ephemerisData
 */
class EphemerisDescription extends Shape
{
    /**
     * @param array{
     *     sourceS3Object?: S3Object|null,
     *     ephemerisData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
