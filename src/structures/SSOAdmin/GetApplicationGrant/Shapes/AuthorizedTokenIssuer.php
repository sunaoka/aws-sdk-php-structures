<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AuthorizedAudiences
 * @property string $TrustedTokenIssuerArn
 */
class AuthorizedTokenIssuer extends Shape
{
    /**
     * @param array{
     *     AuthorizedAudiences?: list<string>,
     *     TrustedTokenIssuerArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
