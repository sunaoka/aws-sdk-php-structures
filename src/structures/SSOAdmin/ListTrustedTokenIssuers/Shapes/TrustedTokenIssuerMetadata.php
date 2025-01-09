<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListTrustedTokenIssuers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $TrustedTokenIssuerArn
 * @property 'OIDC_JWT' $TrustedTokenIssuerType
 */
class TrustedTokenIssuerMetadata extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     TrustedTokenIssuerArn?: string,
     *     TrustedTokenIssuerType?: 'OIDC_JWT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
