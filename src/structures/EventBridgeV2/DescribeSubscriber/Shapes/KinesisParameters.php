<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PartitionKey
 * @property string|null $ExplicitHashKey
 */
class KinesisParameters extends Shape
{
    /**
     * @param array{
     *     PartitionKey?: string|null,
     *     ExplicitHashKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
