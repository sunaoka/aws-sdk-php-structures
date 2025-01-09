<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InfluxDBv2Parameters $InfluxDBv2
 */
class Parameters extends Shape
{
    /**
     * @param array{InfluxDBv2?: InfluxDBv2Parameters} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
