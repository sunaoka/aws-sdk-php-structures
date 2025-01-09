<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property string $ReplicationTaskIdentifier
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $MigrationType
 * @property string $TableMappings
 * @property string $ReplicationTaskSettings
 * @property \Aws\Api\DateTimeResult $CdcStartTime
 * @property string $CdcStartPosition
 * @property string $CdcStopPosition
 * @property string $TaskData
 */
class ModifyReplicationTaskRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
     *     ReplicationTaskIdentifier?: string,
     *     MigrationType?: 'full-load'|'cdc'|'full-load-and-cdc',
     *     TableMappings?: string,
     *     ReplicationTaskSettings?: string,
     *     CdcStartTime?: \Aws\Api\DateTimeResult,
     *     CdcStartPosition?: string,
     *     CdcStopPosition?: string,
     *     TaskData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
