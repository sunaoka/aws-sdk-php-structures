<?php

namespace Sunaoka\Aws\Structures\Sms\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $importedAppId
 * @property string $name
 * @property string $description
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED' $status
 * @property string $statusMessage
 * @property 'NOT_CONFIGURED'|'CONFIGURED' $replicationConfigurationStatus
 * @property 'READY_FOR_CONFIGURATION'|'CONFIGURATION_IN_PROGRESS'|'CONFIGURATION_INVALID'|'READY_FOR_REPLICATION'|'VALIDATION_IN_PROGRESS'|'REPLICATION_PENDING'|'REPLICATION_IN_PROGRESS'|'REPLICATED'|'PARTIALLY_REPLICATED'|'DELTA_REPLICATION_IN_PROGRESS'|'DELTA_REPLICATED'|'DELTA_REPLICATION_FAILED'|'REPLICATION_FAILED'|'REPLICATION_STOPPING'|'REPLICATION_STOP_FAILED'|'REPLICATION_STOPPED' $replicationStatus
 * @property string $replicationStatusMessage
 * @property \Aws\Api\DateTimeResult $latestReplicationTime
 * @property 'NOT_CONFIGURED'|'CONFIGURED' $launchConfigurationStatus
 * @property 'READY_FOR_CONFIGURATION'|'CONFIGURATION_IN_PROGRESS'|'CONFIGURATION_INVALID'|'READY_FOR_LAUNCH'|'VALIDATION_IN_PROGRESS'|'LAUNCH_PENDING'|'LAUNCH_IN_PROGRESS'|'LAUNCHED'|'PARTIALLY_LAUNCHED'|'DELTA_LAUNCH_IN_PROGRESS'|'DELTA_LAUNCH_FAILED'|'LAUNCH_FAILED'|'TERMINATE_IN_PROGRESS'|'TERMINATE_FAILED'|'TERMINATED' $launchStatus
 * @property string $launchStatusMessage
 * @property LaunchDetails $launchDetails
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property string $roleName
 * @property int $totalServerGroups
 * @property int $totalServers
 */
class AppSummary extends Shape
{
    /**
     * @param array{
     *     appId?: string,
     *     importedAppId?: string,
     *     name?: string,
     *     description?: string,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'DELETE_FAILED',
     *     statusMessage?: string,
     *     replicationConfigurationStatus?: 'NOT_CONFIGURED'|'CONFIGURED',
     *     replicationStatus?: 'READY_FOR_CONFIGURATION'|'CONFIGURATION_IN_PROGRESS'|'CONFIGURATION_INVALID'|'READY_FOR_REPLICATION'|'VALIDATION_IN_PROGRESS'|'REPLICATION_PENDING'|'REPLICATION_IN_PROGRESS'|'REPLICATED'|'PARTIALLY_REPLICATED'|'DELTA_REPLICATION_IN_PROGRESS'|'DELTA_REPLICATED'|'DELTA_REPLICATION_FAILED'|'REPLICATION_FAILED'|'REPLICATION_STOPPING'|'REPLICATION_STOP_FAILED'|'REPLICATION_STOPPED',
     *     replicationStatusMessage?: string,
     *     latestReplicationTime?: \Aws\Api\DateTimeResult,
     *     launchConfigurationStatus?: 'NOT_CONFIGURED'|'CONFIGURED',
     *     launchStatus?: 'READY_FOR_CONFIGURATION'|'CONFIGURATION_IN_PROGRESS'|'CONFIGURATION_INVALID'|'READY_FOR_LAUNCH'|'VALIDATION_IN_PROGRESS'|'LAUNCH_PENDING'|'LAUNCH_IN_PROGRESS'|'LAUNCHED'|'PARTIALLY_LAUNCHED'|'DELTA_LAUNCH_IN_PROGRESS'|'DELTA_LAUNCH_FAILED'|'LAUNCH_FAILED'|'TERMINATE_IN_PROGRESS'|'TERMINATE_FAILED'|'TERMINATED',
     *     launchStatusMessage?: string,
     *     launchDetails?: LaunchDetails,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastModified?: \Aws\Api\DateTimeResult,
     *     roleName?: string,
     *     totalServerGroups?: int,
     *     totalServers?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
