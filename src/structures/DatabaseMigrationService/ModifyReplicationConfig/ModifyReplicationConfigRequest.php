<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 * @property string|null $ReplicationConfigIdentifier
 * @property 'full-load'|'cdc'|'full-load-and-cdc'|null $ReplicationType
 * @property string|null $TableMappings
 * @property string|null $ReplicationSettings
 * @property string|null $SupplementalSettings
 * @property Shapes\ComputeConfig|null $ComputeConfig
 * @property string|null $SourceEndpointArn
 * @property string|null $TargetEndpointArn
 */
class ModifyReplicationConfigRequest extends Request
{
    /**
     * @param array{
     *     ReplicationConfigArn: string,
     *     ReplicationConfigIdentifier?: string|null,
     *     ReplicationType?: 'full-load'|'cdc'|'full-load-and-cdc'|null,
     *     TableMappings?: string|null,
     *     ReplicationSettings?: string|null,
     *     SupplementalSettings?: string|null,
     *     ComputeConfig?: Shapes\ComputeConfig|null,
     *     SourceEndpointArn?: string|null,
     *     TargetEndpointArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
