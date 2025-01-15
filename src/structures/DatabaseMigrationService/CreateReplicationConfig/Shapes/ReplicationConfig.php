<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationConfigIdentifier
 * @property string|null $ReplicationConfigArn
 * @property string|null $SourceEndpointArn
 * @property string|null $TargetEndpointArn
 * @property 'full-load'|'cdc'|'full-load-and-cdc'|null $ReplicationType
 * @property ComputeConfig|null $ComputeConfig
 * @property string|null $ReplicationSettings
 * @property string|null $SupplementalSettings
 * @property string|null $TableMappings
 * @property \Aws\Api\DateTimeResult|null $ReplicationConfigCreateTime
 * @property \Aws\Api\DateTimeResult|null $ReplicationConfigUpdateTime
 */
class ReplicationConfig extends Shape
{
    /**
     * @param array{
     *     ReplicationConfigIdentifier?: string|null,
     *     ReplicationConfigArn?: string|null,
     *     SourceEndpointArn?: string|null,
     *     TargetEndpointArn?: string|null,
     *     ReplicationType?: 'full-load'|'cdc'|'full-load-and-cdc'|null,
     *     ComputeConfig?: ComputeConfig|null,
     *     ReplicationSettings?: string|null,
     *     SupplementalSettings?: string|null,
     *     TableMappings?: string|null,
     *     ReplicationConfigCreateTime?: \Aws\Api\DateTimeResult|null,
     *     ReplicationConfigUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
