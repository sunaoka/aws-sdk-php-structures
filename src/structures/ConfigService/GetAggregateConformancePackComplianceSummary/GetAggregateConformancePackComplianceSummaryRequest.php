<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConformancePackComplianceSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\AggregateConformancePackComplianceSummaryFilters $Filters
 * @property 'ACCOUNT_ID'|'AWS_REGION' $GroupByKey
 * @property int<0, 100> $Limit
 * @property string $NextToken
 */
class GetAggregateConformancePackComplianceSummaryRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\AggregateConformancePackComplianceSummaryFilters,
     *     GroupByKey?: 'ACCOUNT_ID'|'AWS_REGION',
     *     Limit?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
