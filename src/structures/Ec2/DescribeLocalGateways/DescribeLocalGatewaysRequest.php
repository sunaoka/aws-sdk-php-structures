<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LocalGatewayIds
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeLocalGatewaysRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayIds?: list<string>,
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
