<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $status
 * @property string|null $statusReason
 * @property string|null $clusterName
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT'|null $clusterType
 * @property Shapes\TickerplantLogConfiguration|null $tickerplantLogConfiguration
 * @property list<Shapes\Volume>|null $volumes
 * @property list<Shapes\KxDatabaseConfiguration>|null $databases
 * @property list<Shapes\KxCacheStorageConfiguration>|null $cacheStorageConfigurations
 * @property Shapes\AutoScalingConfiguration|null $autoScalingConfiguration
 * @property string|null $clusterDescription
 * @property Shapes\CapacityConfiguration|null $capacityConfiguration
 * @property string|null $releaseLabel
 * @property Shapes\VpcConfiguration|null $vpcConfiguration
 * @property string|null $initializationScript
 * @property list<Shapes\KxCommandLineArgument>|null $commandLineArguments
 * @property Shapes\CodeConfiguration|null $code
 * @property string|null $executionRole
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property Shapes\KxSavedownStorageConfiguration|null $savedownStorageConfiguration
 * @property 'SINGLE'|'MULTI'|null $azMode
 * @property string|null $availabilityZoneId
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property Shapes\KxScalingGroupConfiguration|null $scalingGroupConfiguration
 */
class GetKxClusterResponse extends Response
{
}
