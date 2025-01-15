<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SAMLProviderArn
 * @property string|null $SelfServiceSAMLProviderArn
 */
class FederatedAuthenticationRequest extends Shape
{
    /**
     * @param array{
     *     SAMLProviderArn?: string|null,
     *     SelfServiceSAMLProviderArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
