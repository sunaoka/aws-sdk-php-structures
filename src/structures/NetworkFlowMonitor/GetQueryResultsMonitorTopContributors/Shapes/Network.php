<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $asName
 * @property int|null $asNumber
 */
class Network extends Shape
{
    /**
     * @param array{
     *     asName?: string|null,
     *     asNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
