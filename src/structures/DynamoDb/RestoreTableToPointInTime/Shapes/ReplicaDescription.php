<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS' $ReplicaStatus
 * @property string $ReplicaStatusDescription
 * @property string $ReplicaStatusPercentProgress
 * @property string $KMSMasterKeyId
 * @property ProvisionedThroughputOverride $ProvisionedThroughputOverride
 * @property OnDemandThroughputOverride $OnDemandThroughputOverride
 * @property TableWarmThroughputDescription $WarmThroughput
 * @property list<ReplicaGlobalSecondaryIndexDescription> $GlobalSecondaryIndexes
 * @property \Aws\Api\DateTimeResult $ReplicaInaccessibleDateTime
 * @property TableClassSummary $ReplicaTableClassSummary
 */
class ReplicaDescription extends Shape
{
    /**
     * @param array{
     *     RegionName?: string,
     *     ReplicaStatus?: 'CREATING'|'CREATION_FAILED'|'UPDATING'|'DELETING'|'ACTIVE'|'REGION_DISABLED'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS',
     *     ReplicaStatusDescription?: string,
     *     ReplicaStatusPercentProgress?: string,
     *     KMSMasterKeyId?: string,
     *     ProvisionedThroughputOverride?: ProvisionedThroughputOverride,
     *     OnDemandThroughputOverride?: OnDemandThroughputOverride,
     *     WarmThroughput?: TableWarmThroughputDescription,
     *     GlobalSecondaryIndexes?: list<ReplicaGlobalSecondaryIndexDescription>,
     *     ReplicaInaccessibleDateTime?: \Aws\Api\DateTimeResult,
     *     ReplicaTableClassSummary?: TableClassSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
