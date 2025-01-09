<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetryOptions $RetryOptions
 * @property bool $Enabled
 */
class DynamicPartitioningConfiguration extends Shape
{
    /**
     * @param array{
     *     RetryOptions?: RetryOptions,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
