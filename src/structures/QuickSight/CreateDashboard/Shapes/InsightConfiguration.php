<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Computation>|null $Computations
 * @property CustomNarrativeOptions|null $CustomNarrative
 * @property VisualInteractionOptions|null $Interactions
 */
class InsightConfiguration extends Shape
{
    /**
     * @param array{
     *     Computations?: list<Computation>|null,
     *     CustomNarrative?: CustomNarrativeOptions|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
