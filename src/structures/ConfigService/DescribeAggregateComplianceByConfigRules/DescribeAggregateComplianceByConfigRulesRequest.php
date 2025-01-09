<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConfigRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\ConfigRuleComplianceFilters $Filters
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeAggregateComplianceByConfigRulesRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\ConfigRuleComplianceFilters,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
