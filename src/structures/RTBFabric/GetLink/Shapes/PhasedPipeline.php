<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FlowPhase> $phases
 */
class PhasedPipeline extends Shape
{
    /**
     * @param array{phases: list<FlowPhase>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
