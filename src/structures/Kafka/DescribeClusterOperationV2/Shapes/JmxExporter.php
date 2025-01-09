<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnabledInBroker
 */
class JmxExporter extends Shape
{
    /**
     * @param array{EnabledInBroker: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
