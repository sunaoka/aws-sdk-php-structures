<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $CurrentVersion
 * @property bool $IsReplicatorReference
 * @property list<Shapes\KafkaClusterDescription> $KafkaClusters
 * @property list<Shapes\ReplicationInfoDescription> $ReplicationInfoList
 * @property string $ReplicatorArn
 * @property string $ReplicatorDescription
 * @property string $ReplicatorName
 * @property string $ReplicatorResourceArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $ReplicatorState
 * @property string $ServiceExecutionRoleArn
 * @property Shapes\ReplicationStateInfo $StateInfo
 * @property array<string, string> $Tags
 */
class DescribeReplicatorResponse extends Response
{
}
