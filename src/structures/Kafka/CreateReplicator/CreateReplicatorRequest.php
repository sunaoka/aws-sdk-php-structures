<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property list<Shapes\KafkaCluster> $KafkaClusters
 * @property list<Shapes\ReplicationInfo> $ReplicationInfoList
 * @property string $ReplicatorName
 * @property string $ServiceExecutionRoleArn
 * @property array<string, string> $Tags
 */
class CreateReplicatorRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     KafkaClusters: list<Shapes\KafkaCluster>,
     *     ReplicationInfoList: list<Shapes\ReplicationInfo>,
     *     ReplicatorName: string,
     *     ServiceExecutionRoleArn: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
