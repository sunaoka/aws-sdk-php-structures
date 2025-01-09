<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property AwsDynamoDbTableProvisionedThroughputOverride $ProvisionedThroughputOverride
 */
class AwsDynamoDbTableReplicaGlobalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     ProvisionedThroughputOverride?: AwsDynamoDbTableProvisionedThroughputOverride
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
