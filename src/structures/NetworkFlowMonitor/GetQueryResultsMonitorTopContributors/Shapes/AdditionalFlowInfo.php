<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Network|null $network
 * @property ClientLocation|null $clientLocation
 */
class AdditionalFlowInfo extends Shape
{
    /**
     * @param array{
     *     network?: Network|null,
     *     clientLocation?: ClientLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
