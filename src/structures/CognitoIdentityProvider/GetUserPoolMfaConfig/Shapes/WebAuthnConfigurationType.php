<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolMfaConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RelyingPartyId
 * @property 'required'|'preferred'|null $UserVerification
 */
class WebAuthnConfigurationType extends Shape
{
    /**
     * @param array{
     *     RelyingPartyId?: string|null,
     *     UserVerification?: 'required'|'preferred'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
