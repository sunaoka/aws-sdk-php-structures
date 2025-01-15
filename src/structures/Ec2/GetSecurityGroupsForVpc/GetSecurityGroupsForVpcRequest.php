<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSecurityGroupsForVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class GetSecurityGroupsForVpcRequest extends Request
{
    /**
     * @param array{
     *     VpcId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
