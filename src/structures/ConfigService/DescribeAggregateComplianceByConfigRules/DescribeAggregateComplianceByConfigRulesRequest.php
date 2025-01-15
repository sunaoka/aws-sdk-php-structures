<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConfigRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\ConfigRuleComplianceFilters|null $Filters
 * @property int<0, 1000>|null $Limit
 * @property string|null $NextToken
 */
class DescribeAggregateComplianceByConfigRulesRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     Filters?: Shapes\ConfigRuleComplianceFilters|null,
     *     Limit?: int<0, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
