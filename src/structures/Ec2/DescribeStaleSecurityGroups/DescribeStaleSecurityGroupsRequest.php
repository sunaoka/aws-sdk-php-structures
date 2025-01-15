<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int<5, 255>|null $MaxResults
 * @property string|null $NextToken
 * @property string $VpcId
 */
class DescribeStaleSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults?: int<5, 255>|null,
     *     NextToken?: string|null,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
