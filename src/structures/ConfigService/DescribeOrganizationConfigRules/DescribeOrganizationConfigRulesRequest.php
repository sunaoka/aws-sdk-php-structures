<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $OrganizationConfigRuleNames
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class DescribeOrganizationConfigRulesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConfigRuleNames?: list<string>|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
