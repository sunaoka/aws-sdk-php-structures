<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseReplicaCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property int|null $NewReplicaCount
 * @property list<Shapes\ConfigureShard>|null $ReplicaConfiguration
 * @property bool $ApplyImmediately
 */
class IncreaseReplicaCountRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     NewReplicaCount?: int|null,
     *     ReplicaConfiguration?: list<Shapes\ConfigureShard>|null,
     *     ApplyImmediately: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
