<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InfluxDBv2Parameters|null $InfluxDBv2
 */
class Parameters extends Shape
{
    /**
     * @param array{InfluxDBv2?: InfluxDBv2Parameters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
