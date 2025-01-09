<?php

namespace Sunaoka\Aws\Structures\MWAA\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ExecutionRoleArn
 * @property string $AirflowVersion
 * @property string $SourceBucketArn
 * @property string $DagS3Path
 * @property string $PluginsS3Path
 * @property string $PluginsS3ObjectVersion
 * @property string $RequirementsS3Path
 * @property string $RequirementsS3ObjectVersion
 * @property string $StartupScriptS3Path
 * @property string $StartupScriptS3ObjectVersion
 * @property array<string, string> $AirflowConfigurationOptions
 * @property string $EnvironmentClass
 * @property int<1, max> $MaxWorkers
 * @property Shapes\UpdateNetworkConfigurationInput $NetworkConfiguration
 * @property Shapes\LoggingConfigurationInput $LoggingConfiguration
 * @property string $WeeklyMaintenanceWindowStart
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY' $WebserverAccessMode
 * @property int<1, max> $MinWorkers
 * @property int<min, 5> $Schedulers
 * @property int<1, max> $MinWebservers
 * @property int<1, max> $MaxWebservers
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExecutionRoleArn?: string,
     *     AirflowVersion?: string,
     *     SourceBucketArn?: string,
     *     DagS3Path?: string,
     *     PluginsS3Path?: string,
     *     PluginsS3ObjectVersion?: string,
     *     RequirementsS3Path?: string,
     *     RequirementsS3ObjectVersion?: string,
     *     StartupScriptS3Path?: string,
     *     StartupScriptS3ObjectVersion?: string,
     *     AirflowConfigurationOptions?: array<string, string>,
     *     EnvironmentClass?: string,
     *     MaxWorkers?: int<1, max>,
     *     NetworkConfiguration?: Shapes\UpdateNetworkConfigurationInput,
     *     LoggingConfiguration?: Shapes\LoggingConfigurationInput,
     *     WeeklyMaintenanceWindowStart?: string,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY',
     *     MinWorkers?: int<1, max>,
     *     Schedulers?: int<min, 5>,
     *     MinWebservers?: int<1, max>,
     *     MaxWebservers?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
