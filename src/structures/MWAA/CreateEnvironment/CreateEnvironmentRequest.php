<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ExecutionRoleArn
 * @property string $SourceBucketArn
 * @property string $DagS3Path
 * @property Shapes\NetworkConfiguration $NetworkConfiguration
 * @property string|null $PluginsS3Path
 * @property string|null $PluginsS3ObjectVersion
 * @property string|null $RequirementsS3Path
 * @property string|null $RequirementsS3ObjectVersion
 * @property string|null $StartupScriptS3Path
 * @property string|null $StartupScriptS3ObjectVersion
 * @property array<string, string>|null $AirflowConfigurationOptions
 * @property string|null $EnvironmentClass
 * @property int<1, max>|null $MaxWorkers
 * @property string|null $KmsKey
 * @property string|null $AirflowVersion
 * @property Shapes\LoggingConfigurationInput|null $LoggingConfiguration
 * @property string|null $WeeklyMaintenanceWindowStart
 * @property array<string, string>|null $Tags
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null $WebserverAccessMode
 * @property int<1, max>|null $MinWorkers
 * @property int<min, 5>|null $Schedulers
 * @property 'CUSTOMER'|'SERVICE'|null $EndpointManagement
 * @property int<1, max>|null $MinWebservers
 * @property int<1, max>|null $MaxWebservers
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
     *     PluginsS3Path?: string|null,
     *     PluginsS3ObjectVersion?: string|null,
     *     RequirementsS3Path?: string|null,
     *     RequirementsS3ObjectVersion?: string|null,
     *     StartupScriptS3Path?: string|null,
     *     StartupScriptS3ObjectVersion?: string|null,
     *     AirflowConfigurationOptions?: array<string, string>|null,
     *     EnvironmentClass?: string|null,
     *     MaxWorkers?: int<1, max>|null,
     *     KmsKey?: string|null,
     *     AirflowVersion?: string|null,
     *     LoggingConfiguration?: Shapes\LoggingConfigurationInput|null,
     *     WeeklyMaintenanceWindowStart?: string|null,
     *     Tags?: array<string, string>|null,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null,
     *     MinWorkers?: int<1, max>|null,
     *     Schedulers?: int<min, 5>|null,
     *     EndpointManagement?: 'CUSTOMER'|'SERVICE'|null,
     *     MinWebservers?: int<1, max>|null,
     *     MaxWebservers?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
