<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $GroupIds
 * @property list<string> $GroupNames
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     GroupIds?: list<string>,
     *     GroupNames?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
