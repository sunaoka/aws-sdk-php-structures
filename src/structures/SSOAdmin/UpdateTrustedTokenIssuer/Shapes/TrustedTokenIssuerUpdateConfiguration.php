<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateTrustedTokenIssuer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OidcJwtUpdateConfiguration $OidcJwtConfiguration
 */
class TrustedTokenIssuerUpdateConfiguration extends Shape
{
    /**
     * @param array{OidcJwtConfiguration?: OidcJwtUpdateConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
