<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskIdentifier
 * @property string $SourceEndpointArn
 * @property string $TargetEndpointArn
 * @property string $ReplicationInstanceArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $MigrationType
 * @property string $TableMappings
 * @property string $ReplicationTaskSettings
 * @property \Aws\Api\DateTimeResult $CdcStartTime
 * @property string $CdcStartPosition
 * @property string $CdcStopPosition
 * @property list<Shapes\Tag> $Tags
 * @property string $TaskData
 * @property string $ResourceIdentifier
 */
class CreateReplicationTaskRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskIdentifier: string,
     *     SourceEndpointArn: string,
     *     TargetEndpointArn: string,
     *     ReplicationInstanceArn: string,
     *     MigrationType: 'full-load'|'cdc'|'full-load-and-cdc',
     *     TableMappings: string,
     *     ReplicationTaskSettings?: string,
     *     CdcStartTime?: \Aws\Api\DateTimeResult,
     *     CdcStartPosition?: string,
     *     CdcStopPosition?: string,
     *     Tags?: list<Shapes\Tag>,
     *     TaskData?: string,
     *     ResourceIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
