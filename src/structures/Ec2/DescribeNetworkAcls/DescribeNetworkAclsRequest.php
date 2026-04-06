<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkAcls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property list<string>|null $NetworkAclIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeNetworkAclsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     NetworkAclIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
