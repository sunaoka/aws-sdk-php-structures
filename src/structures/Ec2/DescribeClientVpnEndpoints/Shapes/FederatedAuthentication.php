<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SamlProviderArn
 * @property string $SelfServiceSamlProviderArn
 */
class FederatedAuthentication extends Shape
{
    /**
     * @param array{
     *     SamlProviderArn?: string,
     *     SelfServiceSamlProviderArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
