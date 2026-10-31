<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PRIMARY'|'STANDBY'|'REPLICA'|'INGEST'|'QUERY'|'COMPACT'|'PROCESS'> $instanceModes
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge' $instanceType
 * @property int<1, 13> $count
 */
class NodeGroup extends Shape
{
    /**
     * @param array{
     *     instanceModes: list<'PRIMARY'|'STANDBY'|'REPLICA'|'INGEST'|'QUERY'|'COMPACT'|'PROCESS'>,
     *     instanceType: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge',
     *     count: int<1, 13>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
