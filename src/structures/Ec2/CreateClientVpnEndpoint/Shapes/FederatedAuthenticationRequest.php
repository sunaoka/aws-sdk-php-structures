<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SAMLProviderArn
 * @property string $SelfServiceSAMLProviderArn
 */
class FederatedAuthenticationRequest extends Shape
{
    /**
     * @param array{
     *     SAMLProviderArn?: string,
     *     SelfServiceSAMLProviderArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
