<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SamlProviderArn
 * @property string|null $SelfServiceSamlProviderArn
 */
class AwsEc2ClientVpnEndpointAuthenticationOptionsFederatedAuthenticationDetails extends Shape
{
    /**
     * @param array{
     *     SamlProviderArn?: string|null,
     *     SelfServiceSamlProviderArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
