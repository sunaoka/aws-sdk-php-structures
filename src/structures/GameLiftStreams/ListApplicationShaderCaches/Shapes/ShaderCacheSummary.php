<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListApplicationShaderCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $ApplicationArn
 * @property 'INITIALIZED'|'PROCESSING'|'READY'|'DELETING'|'ERROR'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property int|null $StorageBytes
 * @property list<string>|null $AssociatedStreamGroups
 */
class ShaderCacheSummary extends Shape
{
    /**
     * @param array{
     *     Identifier: string,
     *     ApplicationArn: string,
     *     Status?: 'INITIALIZED'|'PROCESSING'|'READY'|'DELETING'|'ERROR'|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     StorageBytes?: int|null,
     *     AssociatedStreamGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
