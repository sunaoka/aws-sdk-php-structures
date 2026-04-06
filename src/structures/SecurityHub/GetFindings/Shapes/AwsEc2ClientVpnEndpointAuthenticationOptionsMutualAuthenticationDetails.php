<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientRootCertificateChain
 */
class AwsEc2ClientVpnEndpointAuthenticationOptionsMutualAuthenticationDetails extends Shape
{
    /**
     * @param array{ClientRootCertificateChain?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
