<?php

namespace Sunaoka\Aws\Structures\kendra\GetSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property 'THIS_MONTH'|'THIS_WEEK'|'ONE_WEEK_AGO'|'TWO_WEEKS_AGO'|'ONE_MONTH_AGO'|'TWO_MONTHS_AGO' $Interval
 * @property 'QUERIES_BY_COUNT'|'QUERIES_BY_ZERO_CLICK_RATE'|'QUERIES_BY_ZERO_RESULT_RATE'|'DOCS_BY_CLICK_COUNT'|'AGG_QUERY_DOC_METRICS'|'TREND_QUERY_DOC_METRICS' $MetricType
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Interval: 'THIS_MONTH'|'THIS_WEEK'|'ONE_WEEK_AGO'|'TWO_WEEKS_AGO'|'ONE_MONTH_AGO'|'TWO_MONTHS_AGO',
     *     MetricType: 'QUERIES_BY_COUNT'|'QUERIES_BY_ZERO_CLICK_RATE'|'QUERIES_BY_ZERO_RESULT_RATE'|'DOCS_BY_CLICK_COUNT'|'AGG_QUERY_DOC_METRICS'|'TREND_QUERY_DOC_METRICS',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
