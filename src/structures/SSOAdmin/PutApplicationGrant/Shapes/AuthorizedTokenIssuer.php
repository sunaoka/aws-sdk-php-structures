<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrustedTokenIssuerArn
 * @property list<string>|null $AuthorizedAudiences
 */
class AuthorizedTokenIssuer extends Shape
{
    /**
     * @param array{
     *     TrustedTokenIssuerArn?: string|null,
     *     AuthorizedAudiences?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
