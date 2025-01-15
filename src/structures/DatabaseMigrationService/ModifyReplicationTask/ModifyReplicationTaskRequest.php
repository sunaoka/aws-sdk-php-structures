<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property string|null $ReplicationTaskIdentifier
 * @property 'full-load'|'cdc'|'full-load-and-cdc'|null $MigrationType
 * @property string|null $TableMappings
 * @property string|null $ReplicationTaskSettings
 * @property \Aws\Api\DateTimeResult|null $CdcStartTime
 * @property string|null $CdcStartPosition
 * @property string|null $CdcStopPosition
 * @property string|null $TaskData
 */
class ModifyReplicationTaskRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
     *     ReplicationTaskIdentifier?: string|null,
     *     MigrationType?: 'full-load'|'cdc'|'full-load-and-cdc'|null,
     *     TableMappings?: string|null,
     *     ReplicationTaskSettings?: string|null,
     *     CdcStartTime?: \Aws\Api\DateTimeResult|null,
     *     CdcStartPosition?: string|null,
     *     CdcStopPosition?: string|null,
     *     TaskData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
