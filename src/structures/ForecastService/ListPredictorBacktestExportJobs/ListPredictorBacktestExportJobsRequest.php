<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictorBacktestExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 */
class ListPredictorBacktestExportJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
