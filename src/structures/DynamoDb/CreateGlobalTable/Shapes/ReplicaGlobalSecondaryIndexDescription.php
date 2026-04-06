<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property ProvisionedThroughputOverride|null $ProvisionedThroughputOverride
 * @property OnDemandThroughputOverride|null $OnDemandThroughputOverride
 * @property GlobalSecondaryIndexWarmThroughputDescription|null $WarmThroughput
 */
class ReplicaGlobalSecondaryIndexDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     ProvisionedThroughputOverride?: ProvisionedThroughputOverride|null,
     *     OnDemandThroughputOverride?: OnDemandThroughputOverride|null,
     *     WarmThroughput?: GlobalSecondaryIndexWarmThroughputDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
