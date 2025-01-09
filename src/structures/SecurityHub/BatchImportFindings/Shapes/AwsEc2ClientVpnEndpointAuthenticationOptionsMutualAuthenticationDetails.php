<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientRootCertificateChain
 */
class AwsEc2ClientVpnEndpointAuthenticationOptionsMutualAuthenticationDetails extends Shape
{
    /**
     * @param array{ClientRootCertificateChain?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
