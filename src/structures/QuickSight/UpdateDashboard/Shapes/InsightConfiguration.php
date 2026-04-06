<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Computation>|null $Computations
 * @property CustomNarrativeOptions|null $CustomNarrative
 */
class InsightConfiguration extends Shape
{
    /**
     * @param array{
     *     Computations?: list<Computation>|null,
     *     CustomNarrative?: CustomNarrativeOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
