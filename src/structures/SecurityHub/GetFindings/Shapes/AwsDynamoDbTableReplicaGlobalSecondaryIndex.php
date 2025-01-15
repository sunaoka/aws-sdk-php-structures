<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property AwsDynamoDbTableProvisionedThroughputOverride|null $ProvisionedThroughputOverride
 */
class AwsDynamoDbTableReplicaGlobalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     ProvisionedThroughputOverride?: AwsDynamoDbTableProvisionedThroughputOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
