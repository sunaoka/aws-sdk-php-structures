<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInternetGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 * @property list<string> $InternetGatewayIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeInternetGatewaysRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool,
     *     InternetGatewayIds?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
