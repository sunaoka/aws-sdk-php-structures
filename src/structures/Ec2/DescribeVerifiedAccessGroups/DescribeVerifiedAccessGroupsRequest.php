<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VerifiedAccessGroupIds
 * @property string|null $VerifiedAccessInstanceId
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeVerifiedAccessGroupsRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupIds?: list<string>|null,
     *     VerifiedAccessInstanceId?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
