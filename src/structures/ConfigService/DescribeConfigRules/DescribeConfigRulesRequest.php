<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConfigRuleNames
 * @property string $NextToken
 * @property Shapes\DescribeConfigRulesFilters $Filters
 */
class DescribeConfigRulesRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>,
     *     NextToken?: string,
     *     Filters?: Shapes\DescribeConfigRulesFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
