<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $CurrentVersion
 * @property bool $IsReplicatorReference
 * @property list<KafkaClusterSummary> $KafkaClustersSummary
 * @property list<ReplicationInfoSummary> $ReplicationInfoSummaryList
 * @property string $ReplicatorArn
 * @property string $ReplicatorName
 * @property string $ReplicatorResourceArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $ReplicatorState
 */
class ReplicatorSummary extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CurrentVersion?: string,
     *     IsReplicatorReference?: bool,
     *     KafkaClustersSummary?: list<KafkaClusterSummary>,
     *     ReplicationInfoSummaryList?: list<ReplicationInfoSummary>,
     *     ReplicatorArn?: string,
     *     ReplicatorName?: string,
     *     ReplicatorResourceArn?: string,
     *     ReplicatorState?: 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
