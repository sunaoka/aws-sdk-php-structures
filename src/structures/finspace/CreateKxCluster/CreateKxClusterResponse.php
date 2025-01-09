<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $environmentId
 * @property 'PENDING'|'CREATING'|'CREATE_FAILED'|'RUNNING'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED' $status
 * @property string $statusReason
 * @property string $clusterName
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT' $clusterType
 * @property Shapes\TickerplantLogConfiguration $tickerplantLogConfiguration
 * @property list<Shapes\Volume> $volumes
 * @property list<Shapes\KxDatabaseConfiguration> $databases
 * @property list<Shapes\KxCacheStorageConfiguration> $cacheStorageConfigurations
 * @property Shapes\AutoScalingConfiguration $autoScalingConfiguration
 * @property string $clusterDescription
 * @property Shapes\CapacityConfiguration $capacityConfiguration
 * @property string $releaseLabel
 * @property Shapes\VpcConfiguration $vpcConfiguration
 * @property string $initializationScript
 * @property list<Shapes\KxCommandLineArgument> $commandLineArguments
 * @property Shapes\CodeConfiguration $code
 * @property string $executionRole
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property Shapes\KxSavedownStorageConfiguration $savedownStorageConfiguration
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $availabilityZoneId
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property Shapes\KxScalingGroupConfiguration $scalingGroupConfiguration
 */
class CreateKxClusterResponse extends Response
{
}
