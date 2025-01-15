<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $CurrentVersion
 * @property bool|null $IsReplicatorReference
 * @property list<KafkaClusterSummary>|null $KafkaClustersSummary
 * @property list<ReplicationInfoSummary>|null $ReplicationInfoSummaryList
 * @property string|null $ReplicatorArn
 * @property string|null $ReplicatorName
 * @property string|null $ReplicatorResourceArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $ReplicatorState
 */
class ReplicatorSummary extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CurrentVersion?: string|null,
     *     IsReplicatorReference?: bool|null,
     *     KafkaClustersSummary?: list<KafkaClusterSummary>|null,
     *     ReplicationInfoSummaryList?: list<ReplicationInfoSummary>|null,
     *     ReplicatorArn?: string|null,
     *     ReplicatorName?: string|null,
     *     ReplicatorResourceArn?: string|null,
     *     ReplicatorState?: 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
