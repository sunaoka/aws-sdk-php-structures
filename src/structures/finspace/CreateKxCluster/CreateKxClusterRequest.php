<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property string $clusterName
 * @property 'HDB'|'RDB'|'GATEWAY' $clusterType
 * @property list<Shapes\KxDatabaseConfiguration>|null $databases
 * @property list<Shapes\KxCacheStorageConfiguration>|null $cacheStorageConfigurations
 * @property Shapes\AutoScalingConfiguration|null $autoScalingConfiguration
 * @property string|null $clusterDescription
 * @property Shapes\CapacityConfiguration $capacityConfiguration
 * @property string $releaseLabel
 * @property Shapes\VpcConfiguration|null $vpcConfiguration
 * @property string|null $initializationScript
 * @property list<Shapes\KxCommandLineArgument>|null $commandLineArguments
 * @property Shapes\CodeConfiguration|null $code
 * @property string|null $executionRole
 * @property Shapes\KxSavedownStorageConfiguration|null $savedownStorageConfiguration
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string|null $availabilityZoneId
 * @property array<string, string>|null $tags
 */
class CreateKxClusterRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     clusterName: string,
     *     clusterType: 'HDB'|'RDB'|'GATEWAY',
     *     databases?: list<Shapes\KxDatabaseConfiguration>|null,
     *     cacheStorageConfigurations?: list<Shapes\KxCacheStorageConfiguration>|null,
     *     autoScalingConfiguration?: Shapes\AutoScalingConfiguration|null,
     *     clusterDescription?: string|null,
     *     capacityConfiguration: Shapes\CapacityConfiguration,
     *     releaseLabel: string,
     *     vpcConfiguration?: Shapes\VpcConfiguration|null,
     *     initializationScript?: string|null,
     *     commandLineArguments?: list<Shapes\KxCommandLineArgument>|null,
     *     code?: Shapes\CodeConfiguration|null,
     *     executionRole?: string|null,
     *     savedownStorageConfiguration?: Shapes\KxSavedownStorageConfiguration|null,
     *     azMode: 'SINGLE'|'MULTI',
     *     availabilityZoneId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
