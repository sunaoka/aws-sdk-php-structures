<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetNodes
 * @property ContainerOverrides|null $containerOverrides
 */
class NodePropertyOverride extends Shape
{
    /**
     * @param array{
     *     targetNodes: string,
     *     containerOverrides?: ContainerOverrides|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
