<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateTrustedTokenIssuer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OidcJwtUpdateConfiguration|null $OidcJwtConfiguration
 */
class TrustedTokenIssuerUpdateConfiguration extends Shape
{
    /**
     * @param array{OidcJwtConfiguration?: OidcJwtUpdateConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
