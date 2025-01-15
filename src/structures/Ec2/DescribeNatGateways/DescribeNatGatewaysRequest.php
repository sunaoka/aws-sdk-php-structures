<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNatGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filter
 * @property int<5, 1000>|null $MaxResults
 * @property list<string>|null $NatGatewayIds
 * @property string|null $NextToken
 */
class DescribeNatGatewaysRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filter?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NatGatewayIds?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
