<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeProblemObservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Observation>|null $ObservationList
 */
class RelatedObservations extends Shape
{
    /**
     * @param array{ObservationList?: list<Observation>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
