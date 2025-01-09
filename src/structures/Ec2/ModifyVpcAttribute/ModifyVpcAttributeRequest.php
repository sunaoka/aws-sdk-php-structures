<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue $EnableDnsHostnames
 * @property Shapes\AttributeBooleanValue $EnableDnsSupport
 * @property string $VpcId
 * @property Shapes\AttributeBooleanValue $EnableNetworkAddressUsageMetrics
 */
class ModifyVpcAttributeRequest extends Request
{
    /**
     * @param array{
     *     EnableDnsHostnames?: Shapes\AttributeBooleanValue,
     *     EnableDnsSupport?: Shapes\AttributeBooleanValue,
     *     VpcId: string,
     *     EnableNetworkAddressUsageMetrics?: Shapes\AttributeBooleanValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
