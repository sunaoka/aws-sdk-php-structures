<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $GroupIds
 * @property list<string>|null $GroupNames
 * @property bool|null $DryRun
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     GroupIds?: list<string>|null,
     *     GroupNames?: list<string>|null,
     *     DryRun?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
