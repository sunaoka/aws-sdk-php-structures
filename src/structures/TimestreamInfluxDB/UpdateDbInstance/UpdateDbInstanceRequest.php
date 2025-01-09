<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\UpdateDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property Shapes\LogDeliveryConfiguration $logDeliveryConfiguration
 * @property string $dbParameterGroupIdentifier
 * @property int<1024, 65535> $port
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge' $dbInstanceType
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY' $deploymentType
 */
class UpdateDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     logDeliveryConfiguration?: Shapes\LogDeliveryConfiguration,
     *     dbParameterGroupIdentifier?: string,
     *     port?: int<1024, 65535>,
     *     dbInstanceType?: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge',
     *     deploymentType?: 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
