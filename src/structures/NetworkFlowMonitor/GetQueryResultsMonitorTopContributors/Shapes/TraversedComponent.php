<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentId
 * @property string|null $componentType
 * @property string|null $componentArn
 * @property string|null $serviceName
 */
class TraversedComponent extends Shape
{
    /**
     * @param array{
     *     componentId?: string|null,
     *     componentType?: string|null,
     *     componentArn?: string|null,
     *     serviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
