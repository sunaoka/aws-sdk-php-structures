<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AttributeBooleanValue|null $EnableDnsHostnames
 * @property Shapes\AttributeBooleanValue|null $EnableDnsSupport
 * @property Shapes\AttributeBooleanValue|null $EnableNetworkAddressUsageMetrics
 * @property string|null $VpcId
 */
class DescribeVpcAttributeResponse extends Response
{
}
