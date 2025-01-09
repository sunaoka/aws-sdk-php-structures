<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 * @property string $ReplicationConfigIdentifier
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $ReplicationType
 * @property string $TableMappings
 * @property string $ReplicationSettings
 * @property string $SupplementalSettings
 * @property Shapes\ComputeConfig $ComputeConfig
 * @property string $SourceEndpointArn
 * @property string $TargetEndpointArn
 */
class ModifyReplicationConfigRequest extends Request
{
    /**
     * @param array{
     *     ReplicationConfigArn: string,
     *     ReplicationConfigIdentifier?: string,
     *     ReplicationType?: 'full-load'|'cdc'|'full-load-and-cdc',
     *     TableMappings?: string,
     *     ReplicationSettings?: string,
     *     SupplementalSettings?: string,
     *     ComputeConfig?: Shapes\ComputeConfig,
     *     SourceEndpointArn?: string,
     *     TargetEndpointArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
