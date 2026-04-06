<?php

namespace Sunaoka\Aws\Structures\Deadline\StartSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $queueIds
 * @property list<string>|null $fleetIds
 */
class SessionsStatisticsResources extends Shape
{
    /**
     * @param array{
     *     queueIds?: list<string>|null,
     *     fleetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
