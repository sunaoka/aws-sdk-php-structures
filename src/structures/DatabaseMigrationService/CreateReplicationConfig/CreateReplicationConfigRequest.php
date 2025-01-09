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
 * @property string $ReplicationSettings
 * @property string $SupplementalSettings
 * @property string $ResourceIdentifier
 * @property list<Shapes\Tag> $Tags
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
     *     ReplicationSettings?: string,
     *     SupplementalSettings?: string,
     *     ResourceIdentifier?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
