<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalyMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $MonitorArnList
 * @property string|null $NextPageToken
 * @property int|null $MaxResults
 */
class GetAnomalyMonitorsRequest extends Request
{
    /**
     * @param array{
     *     MonitorArnList?: list<string>|null,
     *     NextPageToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
