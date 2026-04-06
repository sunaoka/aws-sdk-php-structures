<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VpcId
 * @property Shapes\AttributeBooleanValue|null $EnableDnsHostnames
 * @property Shapes\AttributeBooleanValue|null $EnableDnsSupport
 * @property Shapes\AttributeBooleanValue|null $EnableNetworkAddressUsageMetrics
 */
class DescribeVpcAttributeResponse extends Response
{
}
