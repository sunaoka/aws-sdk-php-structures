<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InfluxDBv2Parameters|null $InfluxDBv2
 * @property InfluxDBv3CoreParameters|null $InfluxDBv3Core
 * @property InfluxDBv3EnterpriseParameters|null $InfluxDBv3Enterprise
 */
class Parameters extends Shape
{
    /**
     * @param array{
     *     InfluxDBv2?: InfluxDBv2Parameters|null,
     *     InfluxDBv3Core?: InfluxDBv3CoreParameters|null,
     *     InfluxDBv3Enterprise?: InfluxDBv3EnterpriseParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
