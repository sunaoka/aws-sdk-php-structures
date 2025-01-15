<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTableSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalTableName
 * @property 'PROVISIONED'|'PAY_PER_REQUEST'|null $GlobalTableBillingMode
 * @property int<1, max>|null $GlobalTableProvisionedWriteCapacityUnits
 * @property Shapes\AutoScalingSettingsUpdate|null $GlobalTableProvisionedWriteCapacityAutoScalingSettingsUpdate
 * @property list<Shapes\GlobalTableGlobalSecondaryIndexSettingsUpdate>|null $GlobalTableGlobalSecondaryIndexSettingsUpdate
 * @property list<Shapes\ReplicaSettingsUpdate>|null $ReplicaSettingsUpdate
 */
class UpdateGlobalTableSettingsRequest extends Request
{
    /**
     * @param array{
     *     GlobalTableName: string,
     *     GlobalTableBillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST'|null,
     *     GlobalTableProvisionedWriteCapacityUnits?: int<1, max>|null,
     *     GlobalTableProvisionedWriteCapacityAutoScalingSettingsUpdate?: Shapes\AutoScalingSettingsUpdate|null,
     *     GlobalTableGlobalSecondaryIndexSettingsUpdate?: list<Shapes\GlobalTableGlobalSecondaryIndexSettingsUpdate>|null,
     *     ReplicaSettingsUpdate?: list<Shapes\ReplicaSettingsUpdate>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
