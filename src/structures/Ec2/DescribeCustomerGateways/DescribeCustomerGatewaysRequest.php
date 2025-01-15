<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCustomerGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CustomerGatewayIds
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeCustomerGatewaysRequest extends Request
{
    /**
     * @param array{
     *     CustomerGatewayIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
