<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AuthorizedAudiences
 * @property string|null $TrustedTokenIssuerArn
 */
class AuthorizedTokenIssuer extends Shape
{
    /**
     * @param array{
     *     AuthorizedAudiences?: list<string>|null,
     *     TrustedTokenIssuerArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
