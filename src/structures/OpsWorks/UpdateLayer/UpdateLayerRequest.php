<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateLayer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerId
 * @property string|null $Name
 * @property string|null $Shortname
 * @property array<'EcsClusterArn'|'EnableHaproxyStats'|'HaproxyStatsUrl'|'HaproxyStatsUser'|'HaproxyStatsPassword'|'HaproxyHealthCheckUrl'|'HaproxyHealthCheckMethod'|'MysqlRootPassword'|'MysqlRootPasswordUbiquitous'|'GangliaUrl'|'GangliaUser'|'GangliaPassword'|'MemcachedMemory'|'NodejsVersion'|'RubyVersion'|'RubygemsVersion'|'ManageBundler'|'BundlerVersion'|'RailsStack'|'PassengerVersion'|'Jvm'|'JvmVersion'|'JvmOptions'|'JavaAppServer'|'JavaAppServerVersion', string>|null $Attributes
 * @property Shapes\CloudWatchLogsConfiguration|null $CloudWatchLogsConfiguration
 * @property string|null $CustomInstanceProfileArn
 * @property string|null $CustomJson
 * @property list<string>|null $CustomSecurityGroupIds
 * @property list<string>|null $Packages
 * @property list<Shapes\VolumeConfiguration>|null $VolumeConfigurations
 * @property bool|null $EnableAutoHealing
 * @property bool|null $AutoAssignElasticIps
 * @property bool|null $AutoAssignPublicIps
 * @property Shapes\Recipes|null $CustomRecipes
 * @property bool|null $InstallUpdatesOnBoot
 * @property bool|null $UseEbsOptimizedInstances
 * @property Shapes\LifecycleEventConfiguration|null $LifecycleEventConfiguration
 */
class UpdateLayerRequest extends Request
{
    /**
     * @param array{
     *     LayerId: string,
     *     Name?: string|null,
     *     Shortname?: string|null,
     *     Attributes?: array<'EcsClusterArn'|'EnableHaproxyStats'|'HaproxyStatsUrl'|'HaproxyStatsUser'|'HaproxyStatsPassword'|'HaproxyHealthCheckUrl'|'HaproxyHealthCheckMethod'|'MysqlRootPassword'|'MysqlRootPasswordUbiquitous'|'GangliaUrl'|'GangliaUser'|'GangliaPassword'|'MemcachedMemory'|'NodejsVersion'|'RubyVersion'|'RubygemsVersion'|'ManageBundler'|'BundlerVersion'|'RailsStack'|'PassengerVersion'|'Jvm'|'JvmVersion'|'JvmOptions'|'JavaAppServer'|'JavaAppServerVersion', string>|null,
     *     CloudWatchLogsConfiguration?: Shapes\CloudWatchLogsConfiguration|null,
     *     CustomInstanceProfileArn?: string|null,
     *     CustomJson?: string|null,
     *     CustomSecurityGroupIds?: list<string>|null,
     *     Packages?: list<string>|null,
     *     VolumeConfigurations?: list<Shapes\VolumeConfiguration>|null,
     *     EnableAutoHealing?: bool|null,
     *     AutoAssignElasticIps?: bool|null,
     *     AutoAssignPublicIps?: bool|null,
     *     CustomRecipes?: Shapes\Recipes|null,
     *     InstallUpdatesOnBoot?: bool|null,
     *     UseEbsOptimizedInstances?: bool|null,
     *     LifecycleEventConfiguration?: Shapes\LifecycleEventConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
