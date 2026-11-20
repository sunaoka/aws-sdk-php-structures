<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SequentialPipeline|null $sequential
 * @property PhasedPipeline|null $phased
 */
class FlowPipeline extends Shape
{
    /**
     * @param array{
     *     sequential?: SequentialPipeline|null,
     *     phased?: PhasedPipeline|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
