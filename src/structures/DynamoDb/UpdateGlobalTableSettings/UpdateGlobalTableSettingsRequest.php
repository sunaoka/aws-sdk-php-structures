<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalTableName
 * @property 'PROVISIONED'|'PAY_PER_REQUEST' $GlobalTableBillingMode
 * @property int $GlobalTableProvisionedWriteCapacityUnits
 * @property Shapes\AutoScalingSettingsUpdate $GlobalTableProvisionedWriteCapacityAutoScalingSettingsUpdate
 * @property list<Shapes\GlobalTableGlobalSecondaryIndexSettingsUpdate> $GlobalTableGlobalSecondaryIndexSettingsUpdate
 * @property list<Shapes\ReplicaSettingsUpdate> $ReplicaSettingsUpdate
 */
class UpdateGlobalTableSettingsRequest extends Request
{
    /**
     * @param array{
     *     GlobalTableName: string,
     *     GlobalTableBillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST',
     *     GlobalTableProvisionedWriteCapacityUnits?: int,
     *     GlobalTableProvisionedWriteCapacityAutoScalingSettingsUpdate?: Shapes\AutoScalingSettingsUpdate,
     *     GlobalTableGlobalSecondaryIndexSettingsUpdate?: list<Shapes\GlobalTableGlobalSecondaryIndexSettingsUpdate>,
     *     ReplicaSettingsUpdate?: list<Shapes\ReplicaSettingsUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
