<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'CREATING'|'CREATE_FAILED'|'AVAILABLE'|'UPDATING'|'DELETING'|'DELETED'|'UNAVAILABLE'|'UPDATE_FAILED'|'ROLLING_BACK'|'CREATING_SNAPSHOT'|'PENDING'|'MAINTENANCE'|null $Status
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $WebserverUrl
 * @property string|null $ExecutionRoleArn
 * @property string|null $ServiceRoleArn
 * @property string|null $KmsKey
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
 * @property NetworkConfiguration|null $NetworkConfiguration
 * @property LoggingConfiguration|null $LoggingConfiguration
 * @property LastUpdate|null $LastUpdate
 * @property string|null $WeeklyMaintenanceWindowStart
 * @property array<string, string>|null $Tags
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null $WebserverAccessMode
 * @property int<1, max>|null $MinWorkers
 * @property int<min, 5>|null $Schedulers
 * @property string|null $WebserverVpcEndpointService
 * @property string|null $DatabaseVpcEndpointService
 * @property string|null $CeleryExecutorQueue
 * @property 'CUSTOMER'|'SERVICE'|null $EndpointManagement
 * @property int<1, max>|null $MinWebservers
 * @property int<1, max>|null $MaxWebservers
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: 'CREATING'|'CREATE_FAILED'|'AVAILABLE'|'UPDATING'|'DELETING'|'DELETED'|'UNAVAILABLE'|'UPDATE_FAILED'|'ROLLING_BACK'|'CREATING_SNAPSHOT'|'PENDING'|'MAINTENANCE'|null,
     *     Arn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     WebserverUrl?: string|null,
     *     ExecutionRoleArn?: string|null,
     *     ServiceRoleArn?: string|null,
     *     KmsKey?: string|null,
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
     *     NetworkConfiguration?: NetworkConfiguration|null,
     *     LoggingConfiguration?: LoggingConfiguration|null,
     *     LastUpdate?: LastUpdate|null,
     *     WeeklyMaintenanceWindowStart?: string|null,
     *     Tags?: array<string, string>|null,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null,
     *     MinWorkers?: int<1, max>|null,
     *     Schedulers?: int<min, 5>|null,
     *     WebserverVpcEndpointService?: string|null,
     *     DatabaseVpcEndpointService?: string|null,
     *     CeleryExecutorQueue?: string|null,
     *     EndpointManagement?: 'CUSTOMER'|'SERVICE'|null,
     *     MinWebservers?: int<1, max>|null,
     *     MaxWebservers?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
