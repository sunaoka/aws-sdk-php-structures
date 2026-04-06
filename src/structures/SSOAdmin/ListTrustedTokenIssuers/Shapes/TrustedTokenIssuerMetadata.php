<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListTrustedTokenIssuers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $TrustedTokenIssuerArn
 * @property 'OIDC_JWT'|null $TrustedTokenIssuerType
 */
class TrustedTokenIssuerMetadata extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     TrustedTokenIssuerArn?: string|null,
     *     TrustedTokenIssuerType?: 'OIDC_JWT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
