<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConformancePackComplianceSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\AggregateConformancePackComplianceSummaryFilters|null $Filters
 * @property 'ACCOUNT_ID'|'AWS_REGION'|null $GroupByKey
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class GetAggregateConformancePackComplianceSummaryRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\AggregateConformancePackComplianceSummaryFilters|null,
     *     GroupByKey?: 'ACCOUNT_ID'|'AWS_REGION'|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
