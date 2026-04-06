<?php

namespace Sunaoka\Aws\Structures\Sms\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appId
 * @property string|null $importedAppId
 * @property string|null $name
 * @property string|null $description
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $status
 * @property string|null $statusMessage
 * @property 'NOT_CONFIGURED'|'CONFIGURED'|null $replicationConfigurationStatus
 * @property 'READY_FOR_CONFIGURATION'|'CONFIGURATION_IN_PROGRESS'|'CONFIGURATION_INVALID'|'READY_FOR_REPLICATION'|'VALIDATION_IN_PROGRESS'|'REPLICATION_PENDING'|'REPLICATION_IN_PROGRESS'|'REPLICATED'|'PARTIALLY_REPLICATED'|'DELTA_REPLICATION_IN_PROGRESS'|'DELTA_REPLICATED'|'DELTA_REPLICATION_FAILED'|'REPLICATION_FAILED'|'REPLICATION_STOPPING'|'REPLICATION_STOP_FAILED'|'REPLICATION_STOPPED'|null $replicationStatus
 * @property string|null $replicationStatusMessage
 * @property \Aws\Api\DateTimeResult|null $latestReplicationTime
 * @property 'NOT_CONFIGURED'|'CONFIGURED'|null $launchConfigurationStatus
 * @property 'READY_FOR_CONFIGURATION'|'CONFIGURATION_IN_PROGRESS'|'CONFIGURATION_INVALID'|'READY_FOR_LAUNCH'|'VALIDATION_IN_PROGRESS'|'LAUNCH_PENDING'|'LAUNCH_IN_PROGRESS'|'LAUNCHED'|'PARTIALLY_LAUNCHED'|'DELTA_LAUNCH_IN_PROGRESS'|'DELTA_LAUNCH_FAILED'|'LAUNCH_FAILED'|'TERMINATE_IN_PROGRESS'|'TERMINATE_FAILED'|'TERMINATED'|null $launchStatus
 * @property string|null $launchStatusMessage
 * @property LaunchDetails|null $launchDetails
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModified
 * @property string|null $roleName
 * @property int|null $totalServerGroups
 * @property int|null $totalServers
 */
class AppSummary extends Shape
{
    /**
     * @param array{
     *     appId?: string|null,
     *     importedAppId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED'|null,
     *     statusMessage?: string|null,
     *     replicationConfigurationStatus?: 'NOT_CONFIGURED'|'CONFIGURED'|null,
     *     replicationStatus?: 'READY_FOR_CONFIGURATION'|'CONFIGURATION_IN_PROGRESS'|'CONFIGURATION_INVALID'|'READY_FOR_REPLICATION'|'VALIDATION_IN_PROGRESS'|'REPLICATION_PENDING'|'REPLICATION_IN_PROGRESS'|'REPLICATED'|'PARTIALLY_REPLICATED'|'DELTA_REPLICATION_IN_PROGRESS'|'DELTA_REPLICATED'|'DELTA_REPLICATION_FAILED'|'REPLICATION_FAILED'|'REPLICATION_STOPPING'|'REPLICATION_STOP_FAILED'|'REPLICATION_STOPPED'|null,
     *     replicationStatusMessage?: string|null,
     *     latestReplicationTime?: \Aws\Api\DateTimeResult|null,
     *     launchConfigurationStatus?: 'NOT_CONFIGURED'|'CONFIGURED'|null,
     *     launchStatus?: 'READY_FOR_CONFIGURATION'|'CONFIGURATION_IN_PROGRESS'|'CONFIGURATION_INVALID'|'READY_FOR_LAUNCH'|'VALIDATION_IN_PROGRESS'|'LAUNCH_PENDING'|'LAUNCH_IN_PROGRESS'|'LAUNCHED'|'PARTIALLY_LAUNCHED'|'DELTA_LAUNCH_IN_PROGRESS'|'DELTA_LAUNCH_FAILED'|'LAUNCH_FAILED'|'TERMINATE_IN_PROGRESS'|'TERMINATE_FAILED'|'TERMINATED'|null,
     *     launchStatusMessage?: string|null,
     *     launchDetails?: LaunchDetails|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastModified?: \Aws\Api\DateTimeResult|null,
     *     roleName?: string|null,
     *     totalServerGroups?: int|null,
     *     totalServers?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
