<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetryOptions|null $RetryOptions
 * @property bool|null $Enabled
 */
class DynamicPartitioningConfiguration extends Shape
{
    /**
     * @param array{
     *     RetryOptions?: RetryOptions|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
