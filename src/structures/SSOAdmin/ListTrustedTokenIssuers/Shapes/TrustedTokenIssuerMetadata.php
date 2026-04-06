<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListTrustedTokenIssuers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrustedTokenIssuerArn
 * @property string|null $Name
 * @property 'OIDC_JWT'|null $TrustedTokenIssuerType
 */
class TrustedTokenIssuerMetadata extends Shape
{
    /**
     * @param array{
     *     TrustedTokenIssuerArn?: string|null,
     *     Name?: string|null,
     *     TrustedTokenIssuerType?: 'OIDC_JWT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
