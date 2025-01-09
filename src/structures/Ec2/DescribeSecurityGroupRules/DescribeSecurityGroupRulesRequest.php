<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $SecurityGroupRuleIds
 * @property bool $DryRun
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeSecurityGroupRulesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     SecurityGroupRuleIds?: list<string>,
     *     DryRun?: bool,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
