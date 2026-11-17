<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $city
 * @property string|null $subdivision
 * @property string|null $country
 */
class ClientLocation extends Shape
{
    /**
     * @param array{
     *     city?: string|null,
     *     subdivision?: string|null,
     *     country?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
