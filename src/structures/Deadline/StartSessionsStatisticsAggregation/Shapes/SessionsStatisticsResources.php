<?php

namespace Sunaoka\Aws\Structures\Deadline\StartSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $fleetIds
 * @property list<string>|null $queueIds
 */
class SessionsStatisticsResources extends Shape
{
    /**
     * @param array{
     *     fleetIds?: list<string>|null,
     *     queueIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
