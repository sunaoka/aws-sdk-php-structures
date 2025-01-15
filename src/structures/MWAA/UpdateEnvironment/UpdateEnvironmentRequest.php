<?php

namespace Sunaoka\Aws\Structures\MWAA\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ExecutionRoleArn
 * @property string|null $AirflowVersion
 * @property string|null $SourceBucketArn
 * @property string|null $DagS3Path
 * @property string|null $PluginsS3Path
 * @property string|null $PluginsS3ObjectVersion
 * @property string|null $RequirementsS3Path
 * @property string|null $RequirementsS3ObjectVersion
 * @property string|null $StartupScriptS3Path
 * @property string|null $StartupScriptS3ObjectVersion
 * @property array<string, string>|null $AirflowConfigurationOptions
 * @property string|null $EnvironmentClass
 * @property int<1, max>|null $MaxWorkers
 * @property Shapes\UpdateNetworkConfigurationInput|null $NetworkConfiguration
 * @property Shapes\LoggingConfigurationInput|null $LoggingConfiguration
 * @property string|null $WeeklyMaintenanceWindowStart
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null $WebserverAccessMode
 * @property int<1, max>|null $MinWorkers
 * @property int<min, 5>|null $Schedulers
 * @property int<1, max>|null $MinWebservers
 * @property int<1, max>|null $MaxWebservers
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExecutionRoleArn?: string|null,
     *     AirflowVersion?: string|null,
     *     SourceBucketArn?: string|null,
     *     DagS3Path?: string|null,
     *     PluginsS3Path?: string|null,
     *     PluginsS3ObjectVersion?: string|null,
     *     RequirementsS3Path?: string|null,
     *     RequirementsS3ObjectVersion?: string|null,
     *     StartupScriptS3Path?: string|null,
     *     StartupScriptS3ObjectVersion?: string|null,
     *     AirflowConfigurationOptions?: array<string, string>|null,
     *     EnvironmentClass?: string|null,
     *     MaxWorkers?: int<1, max>|null,
     *     NetworkConfiguration?: Shapes\UpdateNetworkConfigurationInput|null,
     *     LoggingConfiguration?: Shapes\LoggingConfigurationInput|null,
     *     WeeklyMaintenanceWindowStart?: string|null,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null,
     *     MinWorkers?: int<1, max>|null,
     *     Schedulers?: int<min, 5>|null,
     *     MinWebservers?: int<1, max>|null,
     *     MaxWebservers?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
