<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationConfigIdentifier
 * @property string $ReplicationConfigArn
 * @property string $SourceEndpointArn
 * @property string $TargetEndpointArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $ReplicationType
 * @property ComputeConfig $ComputeConfig
 * @property string $ReplicationSettings
 * @property string $SupplementalSettings
 * @property string $TableMappings
 * @property \Aws\Api\DateTimeResult $ReplicationConfigCreateTime
 * @property \Aws\Api\DateTimeResult $ReplicationConfigUpdateTime
 */
class ReplicationConfig extends Shape
{
    /**
     * @param array{
     *     ReplicationConfigIdentifier?: string,
     *     ReplicationConfigArn?: string,
     *     SourceEndpointArn?: string,
     *     TargetEndpointArn?: string,
     *     ReplicationType?: 'full-load'|'cdc'|'full-load-and-cdc',
     *     ComputeConfig?: ComputeConfig,
     *     ReplicationSettings?: string,
     *     SupplementalSettings?: string,
     *     TableMappings?: string,
     *     ReplicationConfigCreateTime?: \Aws\Api\DateTimeResult,
     *     ReplicationConfigUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
