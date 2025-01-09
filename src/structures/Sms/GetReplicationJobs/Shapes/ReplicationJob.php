<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $replicationJobId
 * @property string $serverId
 * @property 'VIRTUAL_MACHINE' $serverType
 * @property VmServer $vmServer
 * @property \Aws\Api\DateTimeResult $seedReplicationTime
 * @property int $frequency
 * @property bool $runOnce
 * @property \Aws\Api\DateTimeResult $nextReplicationRunStartTime
 * @property 'AWS'|'BYOL' $licenseType
 * @property string $roleName
 * @property string $latestAmiId
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED'|'COMPLETED'|'PAUSED_ON_FAILURE'|'FAILING' $state
 * @property string $statusMessage
 * @property string $description
 * @property int $numberOfRecentAmisToKeep
 * @property bool $encrypted
 * @property string $kmsKeyId
 * @property list<ReplicationRun> $replicationRunList
 */
class ReplicationJob extends Shape
{
    /**
     * @param array{
     *     replicationJobId?: string,
     *     serverId?: string,
     *     serverType?: 'VIRTUAL_MACHINE',
     *     vmServer?: VmServer,
     *     seedReplicationTime?: \Aws\Api\DateTimeResult,
     *     frequency?: int,
     *     runOnce?: bool,
     *     nextReplicationRunStartTime?: \Aws\Api\DateTimeResult,
     *     licenseType?: 'AWS'|'BYOL',
     *     roleName?: string,
     *     latestAmiId?: string,
     *     state?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED'|'COMPLETED'|'PAUSED_ON_FAILURE'|'FAILING',
     *     statusMessage?: string,
     *     description?: string,
     *     numberOfRecentAmisToKeep?: int,
     *     encrypted?: bool,
     *     kmsKeyId?: string,
     *     replicationRunList?: list<ReplicationRun>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
