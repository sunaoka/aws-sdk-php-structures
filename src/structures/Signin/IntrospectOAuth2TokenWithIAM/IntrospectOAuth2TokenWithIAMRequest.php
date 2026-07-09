<?php

namespace Sunaoka\Aws\Structures\Signin\IntrospectOAuth2TokenWithIAM;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $token
 * @property string|null $tokenTypeHint
 */
class IntrospectOAuth2TokenWithIAMRequest extends Request
{
    /**
     * @param array{
     *     token: string,
     *     tokenTypeHint?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
