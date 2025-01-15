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
 * @property string|null $ReplicationTaskSettings
 * @property \Aws\Api\DateTimeResult|null $CdcStartTime
 * @property string|null $CdcStartPosition
 * @property string|null $CdcStopPosition
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $TaskData
 * @property string|null $ResourceIdentifier
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
     *     ReplicationTaskSettings?: string|null,
     *     CdcStartTime?: \Aws\Api\DateTimeResult|null,
     *     CdcStartPosition?: string|null,
     *     CdcStopPosition?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     TaskData?: string|null,
     *     ResourceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
