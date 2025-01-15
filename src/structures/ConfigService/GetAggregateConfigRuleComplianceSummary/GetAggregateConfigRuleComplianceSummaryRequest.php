<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConfigRuleComplianceSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\ConfigRuleComplianceSummaryFilters|null $Filters
 * @property 'ACCOUNT_ID'|'AWS_REGION'|null $GroupByKey
 * @property int<0, 1000>|null $Limit
 * @property string|null $NextToken
 */
class GetAggregateConfigRuleComplianceSummaryRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\ConfigRuleComplianceSummaryFilters|null,
     *     GroupByKey?: 'ACCOUNT_ID'|'AWS_REGION'|null,
     *     Limit?: int<0, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
