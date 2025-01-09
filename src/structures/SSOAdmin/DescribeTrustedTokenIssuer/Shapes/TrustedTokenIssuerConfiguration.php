<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeTrustedTokenIssuer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OidcJwtConfiguration $OidcJwtConfiguration
 */
class TrustedTokenIssuerConfiguration extends Shape
{
    /**
     * @param array{OidcJwtConfiguration?: OidcJwtConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
