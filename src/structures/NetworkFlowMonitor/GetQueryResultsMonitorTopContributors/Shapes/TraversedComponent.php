<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentId
 * @property string $componentType
 * @property string $componentArn
 * @property string $serviceName
 */
class TraversedComponent extends Shape
{
    /**
     * @param array{
     *     componentId?: string,
     *     componentType?: string,
     *     componentArn?: string,
     *     serviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
