<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 * @property 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|null $ReplicaStatus
 * @property string|null $ReplicaStatusDescription
 * @property string|null $ReplicaStatusPercentProgress
 * @property string|null $KMSMasterKeyId
 * @property ProvisionedThroughputOverride|null $ProvisionedThroughputOverride
 * @property OnDemandThroughputOverride|null $OnDemandThroughputOverride
 * @property TableWarmThroughputDescription|null $WarmThroughput
 * @property list<ReplicaGlobalSecondaryIndexDescription>|null $GlobalSecondaryIndexes
 * @property \Aws\Api\DateTimeResult|null $ReplicaInaccessibleDateTime
 * @property TableClassSummary|null $ReplicaTableClassSummary
 */
class ReplicaDescription extends Shape
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     ReplicaStatus?: 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|null,
     *     ReplicaStatusDescription?: string|null,
     *     ReplicaStatusPercentProgress?: string|null,
     *     KMSMasterKeyId?: string|null,
     *     ProvisionedThroughputOverride?: ProvisionedThroughputOverride|null,
     *     OnDemandThroughputOverride?: OnDemandThroughputOverride|null,
     *     WarmThroughput?: TableWarmThroughputDescription|null,
     *     GlobalSecondaryIndexes?: list<ReplicaGlobalSecondaryIndexDescription>|null,
     *     ReplicaInaccessibleDateTime?: \Aws\Api\DateTimeResult|null,
     *     ReplicaTableClassSummary?: TableClassSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
