<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConfigRuleNames
 * @property Shapes\DescribeConfigRulesFilters|null $Filters
 * @property string|null $NextToken
 */
class DescribeConfigRulesRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>|null,
     *     Filters?: Shapes\DescribeConfigRulesFilters|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
