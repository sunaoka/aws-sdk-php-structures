<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'CREATING'|'CREATE_FAILED'|'AVAILABLE'|'UPDATING'|'DELETING'|'DELETED'|'UNAVAILABLE'|'UPDATE_FAILED'|'ROLLING_BACK'|'CREATING_SNAPSHOT'|'PENDING'|'MAINTENANCE' $Status
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $WebserverUrl
 * @property string $ExecutionRoleArn
 * @property string $ServiceRoleArn
 * @property string $KmsKey
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
 * @property int $MaxWorkers
 * @property NetworkConfiguration $NetworkConfiguration
 * @property LoggingConfiguration $LoggingConfiguration
 * @property LastUpdate $LastUpdate
 * @property string $WeeklyMaintenanceWindowStart
 * @property array<string, string> $Tags
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY' $WebserverAccessMode
 * @property int $MinWorkers
 * @property int $Schedulers
 * @property string $WebserverVpcEndpointService
 * @property string $DatabaseVpcEndpointService
 * @property string $CeleryExecutorQueue
 * @property 'CUSTOMER'|'SERVICE' $EndpointManagement
 * @property int $MinWebservers
 * @property int $MaxWebservers
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: 'CREATING'|'CREATE_FAILED'|'AVAILABLE'|'UPDATING'|'DELETING'|'DELETED'|'UNAVAILABLE'|'UPDATE_FAILED'|'ROLLING_BACK'|'CREATING_SNAPSHOT'|'PENDING'|'MAINTENANCE',
     *     Arn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     WebserverUrl?: string,
     *     ExecutionRoleArn?: string,
     *     ServiceRoleArn?: string,
     *     KmsKey?: string,
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
     *     MaxWorkers?: int,
     *     NetworkConfiguration?: NetworkConfiguration,
     *     LoggingConfiguration?: LoggingConfiguration,
     *     LastUpdate?: LastUpdate,
     *     WeeklyMaintenanceWindowStart?: string,
     *     Tags?: array<string, string>,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY',
     *     MinWorkers?: int,
     *     Schedulers?: int,
     *     WebserverVpcEndpointService?: string,
     *     DatabaseVpcEndpointService?: string,
     *     CeleryExecutorQueue?: string,
     *     EndpointManagement?: 'CUSTOMER'|'SERVICE',
     *     MinWebservers?: int,
     *     MaxWebservers?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
