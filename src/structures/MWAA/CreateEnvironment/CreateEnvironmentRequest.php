<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $AirflowConfigurationOptions
 * @property string|null $AirflowVersion
 * @property string $DagS3Path
 * @property string|null $EnvironmentClass
 * @property string $ExecutionRoleArn
 * @property string|null $KmsKey
 * @property Shapes\LoggingConfigurationInput|null $LoggingConfiguration
 * @property int<1, max>|null $MaxWorkers
 * @property int<1, max>|null $MinWorkers
 * @property string $Name
 * @property Shapes\NetworkConfiguration $NetworkConfiguration
 * @property string|null $PluginsS3ObjectVersion
 * @property string|null $PluginsS3Path
 * @property string|null $RequirementsS3ObjectVersion
 * @property string|null $RequirementsS3Path
 * @property int<min, 5>|null $Schedulers
 * @property string $SourceBucketArn
 * @property string|null $StartupScriptS3ObjectVersion
 * @property string|null $StartupScriptS3Path
 * @property array<string, string>|null $Tags
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null $WebserverAccessMode
 * @property string|null $WeeklyMaintenanceWindowStart
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     AirflowConfigurationOptions?: array<string, string>|null,
     *     AirflowVersion?: string|null,
     *     DagS3Path: string,
     *     EnvironmentClass?: string|null,
     *     ExecutionRoleArn: string,
     *     KmsKey?: string|null,
     *     LoggingConfiguration?: Shapes\LoggingConfigurationInput|null,
     *     MaxWorkers?: int<1, max>|null,
     *     MinWorkers?: int<1, max>|null,
     *     Name: string,
     *     NetworkConfiguration: Shapes\NetworkConfiguration,
     *     PluginsS3ObjectVersion?: string|null,
     *     PluginsS3Path?: string|null,
     *     RequirementsS3ObjectVersion?: string|null,
     *     RequirementsS3Path?: string|null,
     *     Schedulers?: int<min, 5>|null,
     *     SourceBucketArn: string,
     *     StartupScriptS3ObjectVersion?: string|null,
     *     StartupScriptS3Path?: string|null,
     *     Tags?: array<string, string>|null,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null,
     *     WeeklyMaintenanceWindowStart?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
