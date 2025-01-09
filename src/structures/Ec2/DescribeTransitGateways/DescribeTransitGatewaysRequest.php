<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TransitGatewayIds
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeTransitGatewaysRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
