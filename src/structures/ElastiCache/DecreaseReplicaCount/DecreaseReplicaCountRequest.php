<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DecreaseReplicaCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property int $NewReplicaCount
 * @property list<Shapes\ConfigureShard> $ReplicaConfiguration
 * @property list<string> $ReplicasToRemove
 * @property bool $ApplyImmediately
 */
class DecreaseReplicaCountRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     NewReplicaCount?: int,
     *     ReplicaConfiguration?: list<Shapes\ConfigureShard>,
     *     ReplicasToRemove?: list<string>,
     *     ApplyImmediately: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
