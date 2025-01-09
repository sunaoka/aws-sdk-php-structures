<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $MonitorArn
 * @property list<Shapes\Filter> $Filters
 */
class ListMonitorEvaluationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     MonitorArn: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
