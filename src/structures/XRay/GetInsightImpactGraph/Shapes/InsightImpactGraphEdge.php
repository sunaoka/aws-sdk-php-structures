<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightImpactGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReferenceId
 */
class InsightImpactGraphEdge extends Shape
{
    /**
     * @param array{ReferenceId?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
