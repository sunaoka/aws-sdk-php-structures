<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbBackup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string|null $name
 * @property string $arn
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING'|'DELETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $expiresAfter
 * @property string|null $dbResourceId
 * @property 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'CUSTOM_SCHEDULE'|'ON_DEMAND'|'CONTINUOUS'|null $type
 * @property 'INFLUXDB_V2'|'INFLUXDB_V3_CORE'|'INFLUXDB_V3_ENTERPRISE'|null $engineType
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|'MULTI_NODE_READ_REPLICAS'|null $deploymentType
 * @property string|null $kmsKeyId
 * @property Shapes\ClusterConfiguration|null $clusterConfiguration
 * @property string|null $dbParameterGroupId
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null $dbInstanceType
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property 'AUTOMATIC'|'NO_FAILOVER'|null $failoverMode
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null $dbStorageType
 * @property int<20, 15360>|null $allocatedStorage
 * @property list<string>|null $vpcSubnetIds
 * @property list<string>|null $vpcSecurityGroupIds
 * @property bool|null $publiclyAccessible
 * @property int|null $port
 * @property 'IPV4'|'DUAL'|null $networkType
 * @property string|null $influxAuthParametersSecretArn
 * @property Shapes\MaintenanceSchedule|null $maintenanceSchedule
 */
class CreateDbBackupResponse extends Response
{
}
