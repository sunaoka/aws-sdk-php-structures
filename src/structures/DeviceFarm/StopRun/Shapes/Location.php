<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $latitude
 * @property double $longitude
 */
class Location extends Shape
{
    /**
     * @param array{
     *     latitude: double,
     *     longitude: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
