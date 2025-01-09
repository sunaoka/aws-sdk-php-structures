<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property 'start-replication'|'resume-processing'|'reload-target' $StartReplicationTaskType
 * @property \Aws\Api\DateTimeResult $CdcStartTime
 * @property string $CdcStartPosition
 * @property string $CdcStopPosition
 */
class StartReplicationTaskRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
     *     StartReplicationTaskType: 'start-replication'|'resume-processing'|'reload-target',
     *     CdcStartTime?: \Aws\Api\DateTimeResult,
     *     CdcStartPosition?: string,
     *     CdcStopPosition?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
