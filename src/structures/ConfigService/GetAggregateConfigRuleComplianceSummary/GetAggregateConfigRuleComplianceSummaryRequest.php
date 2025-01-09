<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConfigRuleComplianceSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\ConfigRuleComplianceSummaryFilters $Filters
 * @property 'ACCOUNT_ID'|'AWS_REGION' $GroupByKey
 * @property int $Limit
 * @property string $NextToken
 */
class GetAggregateConfigRuleComplianceSummaryRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\ConfigRuleComplianceSummaryFilters,
     *     GroupByKey?: 'ACCOUNT_ID'|'AWS_REGION',
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
