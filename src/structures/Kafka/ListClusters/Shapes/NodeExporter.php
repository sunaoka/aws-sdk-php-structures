<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnabledInBroker
 */
class NodeExporter extends Shape
{
    /**
     * @param array{EnabledInBroker: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
