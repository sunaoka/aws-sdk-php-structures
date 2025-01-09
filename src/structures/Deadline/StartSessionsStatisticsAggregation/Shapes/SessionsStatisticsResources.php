<?php

namespace Sunaoka\Aws\Structures\Deadline\StartSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $queueIds
 * @property list<string> $fleetIds
 */
class SessionsStatisticsResources extends Shape
{
    /**
     * @param array{
     *     queueIds?: list<string>,
     *     fleetIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
