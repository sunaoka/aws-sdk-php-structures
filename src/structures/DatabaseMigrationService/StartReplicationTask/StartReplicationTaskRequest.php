<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property 'start-replication'|'resume-processing'|'reload-target' $StartReplicationTaskType
 * @property \Aws\Api\DateTimeResult|null $CdcStartTime
 * @property string|null $CdcStartPosition
 * @property string|null $CdcStopPosition
 */
class StartReplicationTaskRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
     *     StartReplicationTaskType: 'start-replication'|'resume-processing'|'reload-target',
     *     CdcStartTime?: \Aws\Api\DateTimeResult|null,
     *     CdcStartPosition?: string|null,
     *     CdcStopPosition?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
