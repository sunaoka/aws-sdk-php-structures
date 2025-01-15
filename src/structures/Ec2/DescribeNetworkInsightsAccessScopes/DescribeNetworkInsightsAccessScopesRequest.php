<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAccessScopes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $NetworkInsightsAccessScopeIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property bool|null $DryRun
 * @property string|null $NextToken
 */
class DescribeNetworkInsightsAccessScopesRequest extends Request
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 100>|null,
     *     DryRun?: bool|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
