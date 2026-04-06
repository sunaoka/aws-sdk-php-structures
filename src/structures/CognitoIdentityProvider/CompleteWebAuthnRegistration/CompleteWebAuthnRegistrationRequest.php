<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CompleteWebAuthnRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property Shapes\Document $Credential
 */
class CompleteWebAuthnRegistrationRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     Credential: Shapes\Document
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
