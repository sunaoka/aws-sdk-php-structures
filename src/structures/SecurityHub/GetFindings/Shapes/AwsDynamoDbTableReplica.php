<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsDynamoDbTableReplicaGlobalSecondaryIndex> $GlobalSecondaryIndexes
 * @property string $KmsMasterKeyId
 * @property AwsDynamoDbTableProvisionedThroughputOverride $ProvisionedThroughputOverride
 * @property string $RegionName
 * @property string $ReplicaStatus
 * @property string $ReplicaStatusDescription
 */
class AwsDynamoDbTableReplica extends Shape
{
    /**
     * @param array{
     *     GlobalSecondaryIndexes?: list<AwsDynamoDbTableReplicaGlobalSecondaryIndex>,
     *     KmsMasterKeyId?: string,
     *     ProvisionedThroughputOverride?: AwsDynamoDbTableProvisionedThroughputOverride,
     *     RegionName?: string,
     *     ReplicaStatus?: string,
     *     ReplicaStatusDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
