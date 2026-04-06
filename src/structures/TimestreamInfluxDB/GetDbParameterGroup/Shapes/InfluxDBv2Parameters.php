<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $fluxLogEnabled
 * @property 'debug'|'info'|'error'|null $logLevel
 * @property bool|null $noTasks
 * @property int<0, 256>|null $queryConcurrency
 * @property int<0, 256>|null $queryQueueSize
 * @property 'log'|'jaeger'|null $tracingType
 * @property bool|null $metricsDisabled
 */
class InfluxDBv2Parameters extends Shape
{
    /**
     * @param array{
     *     fluxLogEnabled?: bool|null,
     *     logLevel?: 'debug'|'info'|'error'|null,
     *     noTasks?: bool|null,
     *     queryConcurrency?: int<0, 256>|null,
     *     queryQueueSize?: int<0, 256>|null,
     *     tracingType?: 'log'|'jaeger'|null,
     *     metricsDisabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
