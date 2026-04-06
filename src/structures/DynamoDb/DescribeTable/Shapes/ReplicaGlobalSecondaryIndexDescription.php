<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property ProvisionedThroughputOverride|null $ProvisionedThroughputOverride
 */
class ReplicaGlobalSecondaryIndexDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     ProvisionedThroughputOverride?: ProvisionedThroughputOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
