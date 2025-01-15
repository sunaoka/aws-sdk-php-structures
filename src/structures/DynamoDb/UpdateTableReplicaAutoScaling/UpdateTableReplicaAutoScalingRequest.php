<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTableReplicaAutoScaling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GlobalSecondaryIndexAutoScalingUpdate>|null $GlobalSecondaryIndexUpdates
 * @property string $TableName
 * @property Shapes\AutoScalingSettingsUpdate|null $ProvisionedWriteCapacityAutoScalingUpdate
 * @property list<Shapes\ReplicaAutoScalingUpdate>|null $ReplicaUpdates
 */
class UpdateTableReplicaAutoScalingRequest extends Request
{
    /**
     * @param array{
     *     GlobalSecondaryIndexUpdates?: list<Shapes\GlobalSecondaryIndexAutoScalingUpdate>|null,
     *     TableName: string,
     *     ProvisionedWriteCapacityAutoScalingUpdate?: Shapes\AutoScalingSettingsUpdate|null,
     *     ReplicaUpdates?: list<Shapes\ReplicaAutoScalingUpdate>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
