<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\RestoreFromDbBackup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $restoredDbResourceId
 * @property 'RESTORING'|null $restoreStatus
 * @property 'DB_INSTANCE'|'DB_CLUSTER'|null $resourceType
 * @property 'INFLUXDB_V2'|'INFLUXDB_V3_CORE'|'INFLUXDB_V3_ENTERPRISE'|null $engineType
 * @property 'SINGLE_AZ'|'WITH_MULTIAZ_STANDBY'|'MULTI_NODE_READ_REPLICAS'|null $deploymentType
 */
class RestoreFromDbBackupResponse extends Response
{
}
