<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FlowModule> $modules
 */
class SequentialPipeline extends Shape
{
    /**
     * @param array{modules: list<FlowModule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
