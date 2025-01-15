<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsDynamoDbTableReplicaGlobalSecondaryIndex>|null $GlobalSecondaryIndexes
 * @property string|null $KmsMasterKeyId
 * @property AwsDynamoDbTableProvisionedThroughputOverride|null $ProvisionedThroughputOverride
 * @property string|null $RegionName
 * @property string|null $ReplicaStatus
 * @property string|null $ReplicaStatusDescription
 */
class AwsDynamoDbTableReplica extends Shape
{
    /**
     * @param array{
     *     GlobalSecondaryIndexes?: list<AwsDynamoDbTableReplicaGlobalSecondaryIndex>|null,
     *     KmsMasterKeyId?: string|null,
     *     ProvisionedThroughputOverride?: AwsDynamoDbTableProvisionedThroughputOverride|null,
     *     RegionName?: string|null,
     *     ReplicaStatus?: string|null,
     *     ReplicaStatusDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
