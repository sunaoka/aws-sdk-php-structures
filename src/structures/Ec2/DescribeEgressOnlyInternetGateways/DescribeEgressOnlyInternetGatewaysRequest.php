<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeEgressOnlyInternetGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $EgressOnlyInternetGatewayIds
 * @property int<5, 255> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 */
class DescribeEgressOnlyInternetGatewaysRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     EgressOnlyInternetGatewayIds?: list<string>,
     *     MaxResults?: int<5, 255>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
