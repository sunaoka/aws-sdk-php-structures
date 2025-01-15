<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<Shapes\KafkaCluster> $KafkaClusters
 * @property list<Shapes\ReplicationInfo> $ReplicationInfoList
 * @property string $ReplicatorName
 * @property string $ServiceExecutionRoleArn
 * @property array<string, string>|null $Tags
 */
class CreateReplicatorRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     KafkaClusters: list<Shapes\KafkaCluster>,
     *     ReplicationInfoList: list<Shapes\ReplicationInfo>,
     *     ReplicatorName: string,
     *     ServiceExecutionRoleArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
