<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StartWebAuthnRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 */
class StartWebAuthnRegistrationRequest extends Request
{
    /**
     * @param array{AccessToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
