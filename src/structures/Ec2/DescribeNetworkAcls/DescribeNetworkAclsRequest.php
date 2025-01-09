<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkAcls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 * @property list<string> $NetworkAclIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeNetworkAclsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
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
