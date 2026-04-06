<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteWebAuthnCredential;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $CredentialId
 */
class DeleteWebAuthnCredentialRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     CredentialId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
