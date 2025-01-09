<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConfigRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\ConfigRuleComplianceFilters $Filters
 * @property int<0, 1000> $Limit
 * @property string $NextToken
 */
class DescribeAggregateComplianceByConfigRulesRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\ConfigRuleComplianceFilters,
     *     Limit?: int<0, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
