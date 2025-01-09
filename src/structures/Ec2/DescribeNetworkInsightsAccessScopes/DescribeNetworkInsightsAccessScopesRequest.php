<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAccessScopes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $NetworkInsightsAccessScopeIds
 * @property list<Shapes\Filter> $Filters
 * @property int<1, 100> $MaxResults
 * @property bool $DryRun
 * @property string $NextToken
 */
class DescribeNetworkInsightsAccessScopesRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<1, 100>,
     *     DryRun?: bool,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
