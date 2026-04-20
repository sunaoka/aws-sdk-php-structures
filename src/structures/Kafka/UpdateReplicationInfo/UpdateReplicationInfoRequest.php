<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConsumerGroupReplicationUpdate|null $ConsumerGroupReplication
 * @property string $CurrentVersion
 * @property Shapes\LogDelivery|null $LogDelivery
 * @property string $ReplicatorArn
 * @property string|null $SourceKafkaClusterArn
 * @property string|null $SourceKafkaClusterId
 * @property string|null $TargetKafkaClusterArn
 * @property string|null $TargetKafkaClusterId
 * @property Shapes\TopicReplicationUpdate|null $TopicReplication
 */
class UpdateReplicationInfoRequest extends Request
{
    /**
     * @param array{
     *     ConsumerGroupReplication?: Shapes\ConsumerGroupReplicationUpdate|null,
     *     CurrentVersion: string,
     *     LogDelivery?: Shapes\LogDelivery|null,
     *     ReplicatorArn: string,
     *     SourceKafkaClusterArn?: string|null,
     *     SourceKafkaClusterId?: string|null,
     *     TargetKafkaClusterArn?: string|null,
     *     TargetKafkaClusterId?: string|null,
     *     TopicReplication?: Shapes\TopicReplicationUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
