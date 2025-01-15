<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue|null $EnableDnsHostnames
 * @property Shapes\AttributeBooleanValue|null $EnableDnsSupport
 * @property string $VpcId
 * @property Shapes\AttributeBooleanValue|null $EnableNetworkAddressUsageMetrics
 */
class ModifyVpcAttributeRequest extends Request
{
    /**
     * @param array{
     *     EnableDnsHostnames?: Shapes\AttributeBooleanValue|null,
     *     EnableDnsSupport?: Shapes\AttributeBooleanValue|null,
     *     VpcId: string,
     *     EnableNetworkAddressUsageMetrics?: Shapes\AttributeBooleanValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
