<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInternetGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property bool|null $DryRun
 * @property list<string>|null $InternetGatewayIds
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeInternetGatewaysRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     DryRun?: bool|null,
     *     InternetGatewayIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
