<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CdcStartPosition
 * @property string $CdcStartTime
 * @property string $CdcStopPosition
 * @property string $MigrationType
 * @property string $Id
 * @property string $ResourceIdentifier
 * @property string $ReplicationInstanceArn
 * @property string $ReplicationTaskIdentifier
 * @property string $ReplicationTaskSettings
 * @property string $SourceEndpointArn
 * @property string $TableMappings
 * @property string $TargetEndpointArn
 * @property string $TaskData
 */
class AwsDmsReplicationTaskDetails extends Shape
{
    /**
     * @param array{
     *     CdcStartPosition?: string,
     *     CdcStartTime?: string,
     *     CdcStopPosition?: string,
     *     MigrationType?: string,
     *     Id?: string,
     *     ResourceIdentifier?: string,
     *     ReplicationInstanceArn?: string,
     *     ReplicationTaskIdentifier?: string,
     *     ReplicationTaskSettings?: string,
     *     SourceEndpointArn?: string,
     *     TableMappings?: string,
     *     TargetEndpointArn?: string,
     *     TaskData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
