<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GlobalSecondaryIndexAutoScalingUpdate> $GlobalSecondaryIndexUpdates
 * @property string $TableName
 * @property Shapes\AutoScalingSettingsUpdate $ProvisionedWriteCapacityAutoScalingUpdate
 * @property list<Shapes\ReplicaAutoScalingUpdate> $ReplicaUpdates
 */
class UpdateTableReplicaAutoScalingRequest extends Request
{
    /**
     * @param array{
     *     GlobalSecondaryIndexUpdates?: list<Shapes\GlobalSecondaryIndexAutoScalingUpdate>,
     *     TableName: string,
     *     ProvisionedWriteCapacityAutoScalingUpdate?: Shapes\AutoScalingSettingsUpdate,
     *     ReplicaUpdates?: list<Shapes\ReplicaAutoScalingUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
