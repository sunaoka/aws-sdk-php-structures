<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property int<5, 255> $MaxResults
 * @property string $NextToken
 * @property string $VpcId
 */
class DescribeStaleSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     MaxResults?: int<5, 255>,
     *     NextToken?: string,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
