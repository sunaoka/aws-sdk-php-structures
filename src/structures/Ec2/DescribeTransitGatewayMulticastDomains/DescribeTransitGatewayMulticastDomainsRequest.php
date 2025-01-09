<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayMulticastDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TransitGatewayMulticastDomainIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeTransitGatewayMulticastDomainsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
