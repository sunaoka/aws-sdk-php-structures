<?php

namespace Sunaoka\Aws\Structures\ElastiCache\IncreaseReplicaCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property int $NewReplicaCount
 * @property list<Shapes\ConfigureShard> $ReplicaConfiguration
 * @property bool $ApplyImmediately
 */
class IncreaseReplicaCountRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     NewReplicaCount?: int,
     *     ReplicaConfiguration?: list<Shapes\ConfigureShard>,
     *     ApplyImmediately: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
