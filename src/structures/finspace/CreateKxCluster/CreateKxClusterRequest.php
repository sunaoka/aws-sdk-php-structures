<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $environmentId
 * @property string $clusterName
 * @property 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT' $clusterType
 * @property Shapes\TickerplantLogConfiguration $tickerplantLogConfiguration
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
 * @property Shapes\KxSavedownStorageConfiguration $savedownStorageConfiguration
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $availabilityZoneId
 * @property array<string, string> $tags
 * @property Shapes\KxScalingGroupConfiguration $scalingGroupConfiguration
 */
class CreateKxClusterRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     environmentId: string,
     *     clusterName: string,
     *     clusterType: 'HDB'|'RDB'|'GATEWAY'|'GP'|'TICKERPLANT',
     *     tickerplantLogConfiguration?: Shapes\TickerplantLogConfiguration,
     *     databases?: list<Shapes\KxDatabaseConfiguration>,
     *     cacheStorageConfigurations?: list<Shapes\KxCacheStorageConfiguration>,
     *     autoScalingConfiguration?: Shapes\AutoScalingConfiguration,
     *     clusterDescription?: string,
     *     capacityConfiguration?: Shapes\CapacityConfiguration,
     *     releaseLabel: string,
     *     vpcConfiguration: Shapes\VpcConfiguration,
     *     initializationScript?: string,
     *     commandLineArguments?: list<Shapes\KxCommandLineArgument>,
     *     code?: Shapes\CodeConfiguration,
     *     executionRole?: string,
     *     savedownStorageConfiguration?: Shapes\KxSavedownStorageConfiguration,
     *     azMode: 'SINGLE'|'MULTI',
     *     availabilityZoneId?: string,
     *     tags?: array<string, string>,
     *     scalingGroupConfiguration?: Shapes\KxScalingGroupConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
