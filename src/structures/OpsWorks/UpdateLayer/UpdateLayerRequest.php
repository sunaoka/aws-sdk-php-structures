<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateLayer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerId
 * @property string $Name
 * @property string $Shortname
 * @property array<'EcsClusterArn'|'EnableHaproxyStats'|'HaproxyStatsUrl'|'HaproxyStatsUser'|'HaproxyStatsPassword'|'HaproxyHealthCheckUrl'|'HaproxyHealthCheckMethod'|'MysqlRootPassword'|'MysqlRootPasswordUbiquitous'|'GangliaUrl'|'GangliaUser'|'GangliaPassword'|'MemcachedMemory'|'NodejsVersion'|'RubyVersion'|'RubygemsVersion'|'ManageBundler'|'BundlerVersion'|'RailsStack'|'PassengerVersion'|'Jvm'|'JvmVersion'|'JvmOptions'|'JavaAppServer'|'JavaAppServerVersion', string> $Attributes
 * @property Shapes\CloudWatchLogsConfiguration $CloudWatchLogsConfiguration
 * @property string $CustomInstanceProfileArn
 * @property string $CustomJson
 * @property list<string> $CustomSecurityGroupIds
 * @property list<string> $Packages
 * @property list<Shapes\VolumeConfiguration> $VolumeConfigurations
 * @property bool $EnableAutoHealing
 * @property bool $AutoAssignElasticIps
 * @property bool $AutoAssignPublicIps
 * @property Shapes\Recipes $CustomRecipes
 * @property bool $InstallUpdatesOnBoot
 * @property bool $UseEbsOptimizedInstances
 * @property Shapes\LifecycleEventConfiguration $LifecycleEventConfiguration
 */
class UpdateLayerRequest extends Request
{
    /**
     * @param array{
     *     LayerId: string,
     *     Name?: string,
     *     Shortname?: string,
     *     Attributes?: array<'EcsClusterArn'|'EnableHaproxyStats'|'HaproxyStatsUrl'|'HaproxyStatsUser'|'HaproxyStatsPassword'|'HaproxyHealthCheckUrl'|'HaproxyHealthCheckMethod'|'MysqlRootPassword'|'MysqlRootPasswordUbiquitous'|'GangliaUrl'|'GangliaUser'|'GangliaPassword'|'MemcachedMemory'|'NodejsVersion'|'RubyVersion'|'RubygemsVersion'|'ManageBundler'|'BundlerVersion'|'RailsStack'|'PassengerVersion'|'Jvm'|'JvmVersion'|'JvmOptions'|'JavaAppServer'|'JavaAppServerVersion', string>,
     *     CloudWatchLogsConfiguration?: Shapes\CloudWatchLogsConfiguration,
     *     CustomInstanceProfileArn?: string,
     *     CustomJson?: string,
     *     CustomSecurityGroupIds?: list<string>,
     *     Packages?: list<string>,
     *     VolumeConfigurations?: list<Shapes\VolumeConfiguration>,
     *     EnableAutoHealing?: bool,
     *     AutoAssignElasticIps?: bool,
     *     AutoAssignPublicIps?: bool,
     *     CustomRecipes?: Shapes\Recipes,
     *     InstallUpdatesOnBoot?: bool,
     *     UseEbsOptimizedInstances?: bool,
     *     LifecycleEventConfiguration?: Shapes\LifecycleEventConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
