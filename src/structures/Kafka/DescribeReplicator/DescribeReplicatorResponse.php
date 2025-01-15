<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $CurrentVersion
 * @property bool|null $IsReplicatorReference
 * @property list<Shapes\KafkaClusterDescription>|null $KafkaClusters
 * @property list<Shapes\ReplicationInfoDescription>|null $ReplicationInfoList
 * @property string|null $ReplicatorArn
 * @property string|null $ReplicatorDescription
 * @property string|null $ReplicatorName
 * @property string|null $ReplicatorResourceArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $ReplicatorState
 * @property string|null $ServiceExecutionRoleArn
 * @property Shapes\ReplicationStateInfo|null $StateInfo
 * @property array<string, string>|null $Tags
 */
class DescribeReplicatorResponse extends Response
{
}
