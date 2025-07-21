<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\UpdateDbInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property string|null $dbParameterGroupIdentifier
 * @property int<1024, 65535>|null $port
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null $dbInstanceType
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|null $deploymentType
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null $dbStorageType
 * @property int<20, 15360>|null $allocatedStorage
 */
class UpdateDbInstanceRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     logDeliveryConfiguration?: Shapes\LogDeliveryConfiguration|null,
     *     dbParameterGroupIdentifier?: string|null,
     *     port?: int<1024, 65535>|null,
     *     dbInstanceType?: 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null,
     *     deploymentType?: 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|null,
     *     dbStorageType?: 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null,
     *     allocatedStorage?: int<20, 15360>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
