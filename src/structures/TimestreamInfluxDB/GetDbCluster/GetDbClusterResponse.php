<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AVAILABLE'|'FAILED'|'DELETED'|'MAINTENANCE'|'UPDATING_INSTANCE_TYPE'|'REBOOTING'|'REBOOT_FAILED'|'PARTIALLY_AVAILABLE'|null $status
 * @property string|null $endpoint
 * @property string|null $readerEndpoint
 * @property int<1024, 65535>|null $port
 * @property 'MULTI_NODE_READ_REPLICAS'|null $deploymentType
 * @property 'db.influx.medium'|'db.influx.large'|'db.influx.xlarge'|'db.influx.2xlarge'|'db.influx.4xlarge'|'db.influx.8xlarge'|'db.influx.12xlarge'|'db.influx.16xlarge'|'db.influx.24xlarge'|null $dbInstanceType
 * @property 'IPV4'|'DUAL'|null $networkType
 * @property 'InfluxIOIncludedT1'|'InfluxIOIncludedT2'|'InfluxIOIncludedT3'|null $dbStorageType
 * @property int<20, 15360>|null $allocatedStorage
 * @property 'INFLUXDB_V2'|'INFLUXDB_V3_CORE'|'INFLUXDB_V3_ENTERPRISE'|null $engineType
 * @property bool|null $publiclyAccessible
 * @property string|null $dbParameterGroupIdentifier
 * @property Shapes\LogDeliveryConfiguration|null $logDeliveryConfiguration
 * @property string|null $influxAuthParametersSecretArn
 * @property list<string>|null $vpcSubnetIds
 * @property list<string>|null $vpcSecurityGroupIds
 * @property 'AUTOMATIC'|'NO_FAILOVER'|null $failoverMode
 */
class GetDbClusterResponse extends Response
{
}
