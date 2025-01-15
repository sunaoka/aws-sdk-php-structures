<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeEgressOnlyInternetGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $EgressOnlyInternetGatewayIds
 * @property int<5, 255>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeEgressOnlyInternetGatewaysRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     EgressOnlyInternetGatewayIds?: list<string>|null,
     *     MaxResults?: int<5, 255>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
