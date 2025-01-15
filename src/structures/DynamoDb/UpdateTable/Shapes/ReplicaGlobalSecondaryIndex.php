<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property ProvisionedThroughputOverride|null $ProvisionedThroughputOverride
 * @property OnDemandThroughputOverride|null $OnDemandThroughputOverride
 */
class ReplicaGlobalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     ProvisionedThroughputOverride?: ProvisionedThroughputOverride|null,
     *     OnDemandThroughputOverride?: OnDemandThroughputOverride|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
