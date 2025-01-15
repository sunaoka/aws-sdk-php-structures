<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConfigRuleNames
 * @property string|null $NextToken
 * @property Shapes\DescribeConfigRulesFilters|null $Filters
 */
class DescribeConfigRulesRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>|null,
     *     NextToken?: string|null,
     *     Filters?: Shapes\DescribeConfigRulesFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
