<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkAcls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 * @property bool $DryRun
 * @property list<string> $NetworkAclIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeNetworkAclsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>,
     *     DryRun?: bool,
     *     NetworkAclIds?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
