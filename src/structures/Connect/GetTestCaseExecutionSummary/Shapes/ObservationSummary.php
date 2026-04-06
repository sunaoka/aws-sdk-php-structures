<?php

namespace Sunaoka\Aws\Structures\Connect\GetTestCaseExecutionSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalObservations
 * @property int|null $ObservationsPassed
 * @property int|null $ObservationsFailed
 */
class ObservationSummary extends Shape
{
    /**
     * @param array{
     *     TotalObservations?: int|null,
     *     ObservationsPassed?: int|null,
     *     ObservationsFailed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
