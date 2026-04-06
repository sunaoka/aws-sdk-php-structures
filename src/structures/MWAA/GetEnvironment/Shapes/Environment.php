<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $AirflowConfigurationOptions
 * @property string|null $AirflowVersion
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DagS3Path
 * @property string|null $EnvironmentClass
 * @property string|null $ExecutionRoleArn
 * @property string|null $KmsKey
 * @property LastUpdate|null $LastUpdate
 * @property LoggingConfiguration|null $LoggingConfiguration
 * @property int<1, max>|null $MaxWorkers
 * @property int<1, max>|null $MinWorkers
 * @property string|null $Name
 * @property NetworkConfiguration|null $NetworkConfiguration
 * @property string|null $PluginsS3ObjectVersion
 * @property string|null $PluginsS3Path
 * @property string|null $RequirementsS3ObjectVersion
 * @property string|null $RequirementsS3Path
 * @property int<min, 5>|null $Schedulers
 * @property string|null $ServiceRoleArn
 * @property string|null $SourceBucketArn
 * @property string|null $StartupScriptS3ObjectVersion
 * @property string|null $StartupScriptS3Path
 * @property 'CREATING'|'CREATE_FAILED'|'AVAILABLE'|'UPDATING'|'DELETING'|'DELETED'|'UNAVAILABLE'|'UPDATE_FAILED'|'ROLLING_BACK'|'CREATING_SNAPSHOT'|null $Status
 * @property array<string, string>|null $Tags
 * @property 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null $WebserverAccessMode
 * @property string|null $WebserverUrl
 * @property string|null $WeeklyMaintenanceWindowStart
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     AirflowConfigurationOptions?: array<string, string>|null,
     *     AirflowVersion?: string|null,
     *     Arn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DagS3Path?: string|null,
     *     EnvironmentClass?: string|null,
     *     ExecutionRoleArn?: string|null,
     *     KmsKey?: string|null,
     *     LastUpdate?: LastUpdate|null,
     *     LoggingConfiguration?: LoggingConfiguration|null,
     *     MaxWorkers?: int<1, max>|null,
     *     MinWorkers?: int<1, max>|null,
     *     Name?: string|null,
     *     NetworkConfiguration?: NetworkConfiguration|null,
     *     PluginsS3ObjectVersion?: string|null,
     *     PluginsS3Path?: string|null,
     *     RequirementsS3ObjectVersion?: string|null,
     *     RequirementsS3Path?: string|null,
     *     Schedulers?: int<min, 5>|null,
     *     ServiceRoleArn?: string|null,
     *     SourceBucketArn?: string|null,
     *     StartupScriptS3ObjectVersion?: string|null,
     *     StartupScriptS3Path?: string|null,
     *     Status?: 'CREATING'|'CREATE_FAILED'|'AVAILABLE'|'UPDATING'|'DELETING'|'DELETED'|'UNAVAILABLE'|'UPDATE_FAILED'|'ROLLING_BACK'|'CREATING_SNAPSHOT'|null,
     *     Tags?: array<string, string>|null,
     *     WebserverAccessMode?: 'PRIVATE_ONLY'|'PUBLIC_ONLY'|null,
     *     WebserverUrl?: string|null,
     *     WeeklyMaintenanceWindowStart?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
