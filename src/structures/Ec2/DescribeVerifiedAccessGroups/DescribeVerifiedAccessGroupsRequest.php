<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VerifiedAccessGroupIds
 * @property string $VerifiedAccessInstanceId
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeVerifiedAccessGroupsRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupIds?: list<string>,
     *     VerifiedAccessInstanceId?: string,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
