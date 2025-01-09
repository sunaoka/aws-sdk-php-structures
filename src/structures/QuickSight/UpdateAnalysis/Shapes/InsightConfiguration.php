<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Computation> $Computations
 * @property CustomNarrativeOptions $CustomNarrative
 * @property VisualInteractionOptions $Interactions
 */
class InsightConfiguration extends Shape
{
    /**
     * @param array{
     *     Computations?: list<Computation>,
     *     CustomNarrative?: CustomNarrativeOptions,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
