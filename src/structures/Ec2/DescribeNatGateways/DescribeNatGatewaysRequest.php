<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNatGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filter
 * @property int<5, 1000> $MaxResults
 * @property list<string> $NatGatewayIds
 * @property string $NextToken
 */
class DescribeNatGatewaysRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filter?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NatGatewayIds?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
