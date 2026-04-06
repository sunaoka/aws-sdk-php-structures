<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property string|null $KMSMasterKeyId
 * @property ProvisionedThroughputOverride|null $ProvisionedThroughputOverride
 * @property OnDemandThroughputOverride|null $OnDemandThroughputOverride
 * @property list<ReplicaGlobalSecondaryIndex>|null $GlobalSecondaryIndexes
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null $TableClassOverride
 */
class CreateReplicationGroupMemberAction extends Shape
{
    /**
     * @param array{
     *     RegionName: string,
     *     KMSMasterKeyId?: string|null,
     *     ProvisionedThroughputOverride?: ProvisionedThroughputOverride|null,
     *     OnDemandThroughputOverride?: OnDemandThroughputOverride|null,
     *     GlobalSecondaryIndexes?: list<ReplicaGlobalSecondaryIndex>|null,
     *     TableClassOverride?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
