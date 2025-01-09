<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property string $KMSMasterKeyId
 * @property ProvisionedThroughputOverride $ProvisionedThroughputOverride
 * @property OnDemandThroughputOverride $OnDemandThroughputOverride
 * @property list<ReplicaGlobalSecondaryIndex> $GlobalSecondaryIndexes
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS' $TableClassOverride
 */
class CreateReplicationGroupMemberAction extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     KMSMasterKeyId?: string,
     *     ProvisionedThroughputOverride?: ProvisionedThroughputOverride,
     *     OnDemandThroughputOverride?: OnDemandThroughputOverride,
     *     GlobalSecondaryIndexes?: list<ReplicaGlobalSecondaryIndex>,
     *     TableClassOverride?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
