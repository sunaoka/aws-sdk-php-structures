<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SamlProviderArn
 * @property string $SelfServiceSamlProviderArn
 */
class AwsEc2ClientVpnEndpointAuthenticationOptionsFederatedAuthenticationDetails extends Shape
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
