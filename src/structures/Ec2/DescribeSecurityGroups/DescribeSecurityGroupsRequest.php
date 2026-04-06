<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $GroupIds
 * @property list<string>|null $GroupNames
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     GroupIds?: list<string>|null,
     *     GroupNames?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
