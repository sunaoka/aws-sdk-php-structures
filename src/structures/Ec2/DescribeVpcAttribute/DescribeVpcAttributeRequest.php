<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'enableDnsSupport'|'enableDnsHostnames'|'enableNetworkAddressUsageMetrics' $Attribute
 * @property string $VpcId
 * @property bool $DryRun
 */
class DescribeVpcAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute: 'enableDnsSupport'|'enableDnsHostnames'|'enableNetworkAddressUsageMetrics',
     *     VpcId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
