<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property ProvisionedThroughputOverride $ProvisionedThroughputOverride
 * @property OnDemandThroughputOverride $OnDemandThroughputOverride
 * @property GlobalSecondaryIndexWarmThroughputDescription $WarmThroughput
 */
class ReplicaGlobalSecondaryIndexDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     ProvisionedThroughputOverride?: ProvisionedThroughputOverride,
     *     OnDemandThroughputOverride?: OnDemandThroughputOverride,
     *     WarmThroughput?: GlobalSecondaryIndexWarmThroughputDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
