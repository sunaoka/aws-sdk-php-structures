<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property string $QueryId
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     QueryId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
