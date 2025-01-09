<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCustomerGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CustomerGatewayIds
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeCustomerGatewaysRequest extends Request
{
    /**
     * @param array{
     *     CustomerGatewayIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
