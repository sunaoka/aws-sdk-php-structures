<?php

namespace Sunaoka\Aws\Structures\MWAA\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ExecutionRoleArn
 * @property array<string, string>|null $AirflowConfigurationOptions
 * @property string|null $AirflowVersion
 * @property string|null $DagS3Path
 * @property string|null $EnvironmentClass
 * @property Shapes\LoggingConfigurationInput|null $LoggingConfiguration
 * @property int<1, max>|null $MaxWorkers
 * @property int<1, max>|null $MinWorkers
 * @property int<1, max>|null $MaxWebservers
 * @property int<1, max>|null $MinWebservers
 * @property 'FORCED'|'GRACEFUL'|null $WorkerReplacementStrategy
 * @property Shapes\UpdateNetworkConfigurationInput|null $NetworkConfiguration
 * @property string|null $PluginsS3Path
 * @property string|null $PluginsS3ObjectVersion
 * @property string|null $RequirementsS3Path
 * @property string|null $RequirementsS3ObjectVersion
 * @property int<min, 5>|null $Schedulers
 * @property string|null $SourceBucketArn
 * @property string|null $StartupScriptS3Path
 * @property string|null $StartupScriptS3ObjectVersion
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null $WebserverAccessMode
 * @property string|null $WeeklyMaintenanceWindowStart
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExecutionRoleArn?: string|null,
     *     AirflowConfigurationOptions?: array<string, string>|null,
     *     AirflowVersion?: string|null,
     *     DagS3Path?: string|null,
     *     EnvironmentClass?: string|null,
     *     LoggingConfiguration?: Shapes\LoggingConfigurationInput|null,
     *     MaxWorkers?: int<1, max>|null,
     *     MinWorkers?: int<1, max>|null,
     *     MaxWebservers?: int<1, max>|null,
     *     MinWebservers?: int<1, max>|null,
     *     WorkerReplacementStrategy?: 'FORCED'|'GRACEFUL'|null,
     *     NetworkConfiguration?: Shapes\UpdateNetworkConfigurationInput|null,
     *     PluginsS3Path?: string|null,
     *     PluginsS3ObjectVersion?: string|null,
     *     RequirementsS3Path?: string|null,
     *     RequirementsS3ObjectVersion?: string|null,
     *     Schedulers?: int<min, 5>|null,
     *     SourceBucketArn?: string|null,
     *     StartupScriptS3Path?: string|null,
     *     StartupScriptS3ObjectVersion?: string|null,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null,
     *     WeeklyMaintenanceWindowStart?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
