<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ExecutionRoleArn
 * @property string $SourceBucketArn
 * @property string $DagS3Path
 * @property Shapes\NetworkConfiguration $NetworkConfiguration
 * @property string $PluginsS3Path
 * @property string $PluginsS3ObjectVersion
 * @property string $RequirementsS3Path
 * @property string $RequirementsS3ObjectVersion
 * @property string $StartupScriptS3Path
 * @property string $StartupScriptS3ObjectVersion
 * @property array<string, string> $AirflowConfigurationOptions
 * @property string $EnvironmentClass
 * @property int $MaxWorkers
 * @property string $KmsKey
 * @property string $AirflowVersion
 * @property Shapes\LoggingConfigurationInput $LoggingConfiguration
 * @property string $WeeklyMaintenanceWindowStart
 * @property array<string, string> $Tags
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY' $WebserverAccessMode
 * @property int $MinWorkers
 * @property int $Schedulers
 * @property 'CUSTOMER'|'SERVICE' $EndpointManagement
 * @property int $MinWebservers
 * @property int $MaxWebservers
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExecutionRoleArn: string,
     *     SourceBucketArn: string,
     *     DagS3Path: string,
     *     NetworkConfiguration: Shapes\NetworkConfiguration,
     *     PluginsS3Path?: string,
     *     PluginsS3ObjectVersion?: string,
     *     RequirementsS3Path?: string,
     *     RequirementsS3ObjectVersion?: string,
     *     StartupScriptS3Path?: string,
     *     StartupScriptS3ObjectVersion?: string,
     *     AirflowConfigurationOptions?: array<string, string>,
     *     EnvironmentClass?: string,
     *     MaxWorkers?: int,
     *     KmsKey?: string,
     *     AirflowVersion?: string,
     *     LoggingConfiguration?: Shapes\LoggingConfigurationInput,
     *     WeeklyMaintenanceWindowStart?: string,
     *     Tags?: array<string, string>,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY',
     *     MinWorkers?: int,
     *     Schedulers?: int,
     *     EndpointManagement?: 'CUSTOMER'|'SERVICE',
     *     MinWebservers?: int,
     *     MaxWebservers?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
