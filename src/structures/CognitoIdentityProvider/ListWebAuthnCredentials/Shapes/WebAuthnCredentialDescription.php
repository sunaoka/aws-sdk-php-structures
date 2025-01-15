<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListWebAuthnCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CredentialId
 * @property string $FriendlyCredentialName
 * @property string $RelyingPartyId
 * @property string|null $AuthenticatorAttachment
 * @property list<string> $AuthenticatorTransports
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class WebAuthnCredentialDescription extends Shape
{
    /**
     * @param array{
     *     CredentialId: string,
     *     FriendlyCredentialName: string,
     *     RelyingPartyId: string,
     *     AuthenticatorAttachment?: string|null,
     *     AuthenticatorTransports: list<string>,
     *     CreatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
