<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSecurityGroupsForVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class GetSecurityGroupsForVpcRequest extends Request
{
    /**
     * @param array{
     *     VpcId: string,
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
