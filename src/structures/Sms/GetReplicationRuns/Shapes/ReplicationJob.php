<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $replicationJobId
 * @property string|null $serverId
 * @property 'VIRTUAL_MACHINE'|null $serverType
 * @property VmServer|null $vmServer
 * @property \Aws\Api\DateTimeResult|null $seedReplicationTime
 * @property int|null $frequency
 * @property bool|null $runOnce
 * @property \Aws\Api\DateTimeResult|null $nextReplicationRunStartTime
 * @property 'AWS'|'BYOL'|null $licenseType
 * @property string|null $roleName
 * @property string|null $latestAmiId
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED'|'COMPLETED'|'PAUSED_ON_FAILURE'|'FAILING'|null $state
 * @property string|null $statusMessage
 * @property string|null $description
 * @property int|null $numberOfRecentAmisToKeep
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 * @property list<ReplicationRun>|null $replicationRunList
 */
class ReplicationJob extends Shape
{
    /**
     * @param array{
     *     replicationJobId?: string|null,
     *     serverId?: string|null,
     *     serverType?: 'VIRTUAL_MACHINE'|null,
     *     vmServer?: VmServer|null,
     *     seedReplicationTime?: \Aws\Api\DateTimeResult|null,
     *     frequency?: int|null,
     *     runOnce?: bool|null,
     *     nextReplicationRunStartTime?: \Aws\Api\DateTimeResult|null,
     *     licenseType?: 'AWS'|'BYOL'|null,
     *     roleName?: string|null,
     *     latestAmiId?: string|null,
     *     state?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED'|'COMPLETED'|'PAUSED_ON_FAILURE'|'FAILING'|null,
     *     statusMessage?: string|null,
     *     description?: string|null,
     *     numberOfRecentAmisToKeep?: int|null,
     *     encrypted?: bool|null,
     *     kmsKeyId?: string|null,
     *     replicationRunList?: list<ReplicationRun>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
