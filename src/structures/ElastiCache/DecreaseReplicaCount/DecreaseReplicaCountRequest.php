<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DecreaseReplicaCount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property int|null $NewReplicaCount
 * @property list<Shapes\ConfigureShard>|null $ReplicaConfiguration
 * @property list<string>|null $ReplicasToRemove
 * @property bool $ApplyImmediately
 */
class DecreaseReplicaCountRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     NewReplicaCount?: int|null,
     *     ReplicaConfiguration?: list<Shapes\ConfigureShard>|null,
     *     ReplicasToRemove?: list<string>|null,
     *     ApplyImmediately: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
