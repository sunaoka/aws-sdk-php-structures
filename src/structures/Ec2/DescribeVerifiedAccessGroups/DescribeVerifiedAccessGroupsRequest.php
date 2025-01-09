<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VerifiedAccessGroupIds
 * @property string $VerifiedAccessInstanceId
 * @property int $MaxResults
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
     *     MaxResults?: int,
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
