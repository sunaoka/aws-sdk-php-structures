<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalyMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $MonitorArnList
 * @property string $NextPageToken
 * @property int $MaxResults
 */
class GetAnomalyMonitorsRequest extends Request
{
    /**
     * @param array{
     *     MonitorArnList?: list<string>,
     *     NextPageToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
