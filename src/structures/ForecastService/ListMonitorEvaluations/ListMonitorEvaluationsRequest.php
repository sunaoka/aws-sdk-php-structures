<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $MonitorArn
 * @property list<Shapes\Filter>|null $Filters
 */
class ListMonitorEvaluationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     MonitorArn: string,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
