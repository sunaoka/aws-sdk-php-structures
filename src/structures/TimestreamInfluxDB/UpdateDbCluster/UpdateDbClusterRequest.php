<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\UpdateDbCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dbClusterId
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property string|null $dbParameterGroupIdentifier
 * @property int<1024, 65535>|null $port
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null $dbInstanceType
 * @property 'AUTOMATIC'|'NO_FAILOVER'|null $failoverMode
 */
class UpdateDbClusterRequest extends Request
{
    /**
     * @param array{
     *     dbClusterId: string,
     *     logDeliveryConfiguration?: Shapes\LogDeliveryConfiguration|null,
     *     dbParameterGroupIdentifier?: string|null,
     *     port?: int<1024, 65535>|null,
     *     dbInstanceType?: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null,
     *     failoverMode?: 'AUTOMATIC'|'NO_FAILOVER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
