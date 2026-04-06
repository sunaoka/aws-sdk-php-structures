<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetNodes
 * @property ContainerProperties|null $container
 */
class NodeRangeProperty extends Shape
{
    /**
     * @param array{
     *     targetNodes: string,
     *     container?: ContainerProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
