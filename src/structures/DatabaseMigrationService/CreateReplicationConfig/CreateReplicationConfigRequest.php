<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigIdentifier
 * @property string $SourceEndpointArn
 * @property string $TargetEndpointArn
 * @property Shapes\ComputeConfig $ComputeConfig
 * @property 'full-load'|'cdc'|'full-load-and-cdc' $ReplicationType
 * @property string $TableMappings
 * @property string|null $ReplicationSettings
 * @property string|null $SupplementalSettings
 * @property string|null $ResourceIdentifier
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateReplicationConfigRequest extends Request
{
    /**
     * @param array{
     *     ReplicationConfigIdentifier: string,
     *     SourceEndpointArn: string,
     *     TargetEndpointArn: string,
     *     ComputeConfig: Shapes\ComputeConfig,
     *     ReplicationType: 'full-load'|'cdc'|'full-load-and-cdc',
     *     TableMappings: string,
     *     ReplicationSettings?: string|null,
     *     SupplementalSettings?: string|null,
     *     ResourceIdentifier?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
