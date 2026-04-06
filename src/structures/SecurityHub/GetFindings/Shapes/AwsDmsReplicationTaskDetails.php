<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CdcStartPosition
 * @property string|null $CdcStartTime
 * @property string|null $CdcStopPosition
 * @property string|null $MigrationType
 * @property string|null $Id
 * @property string|null $ResourceIdentifier
 * @property string|null $ReplicationInstanceArn
 * @property string|null $ReplicationTaskIdentifier
 * @property string|null $ReplicationTaskSettings
 * @property string|null $SourceEndpointArn
 * @property string|null $TableMappings
 * @property string|null $TargetEndpointArn
 * @property string|null $TaskData
 */
class AwsDmsReplicationTaskDetails extends Shape
{
    /**
     * @param array{
     *     CdcStartPosition?: string|null,
     *     CdcStartTime?: string|null,
     *     CdcStopPosition?: string|null,
     *     MigrationType?: string|null,
     *     Id?: string|null,
     *     ResourceIdentifier?: string|null,
     *     ReplicationInstanceArn?: string|null,
     *     ReplicationTaskIdentifier?: string|null,
     *     ReplicationTaskSettings?: string|null,
     *     SourceEndpointArn?: string|null,
     *     TableMappings?: string|null,
     *     TargetEndpointArn?: string|null,
     *     TaskData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
