<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolMfaConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RelyingPartyId
 * @property 'required'|'preferred' $UserVerification
 */
class WebAuthnConfigurationType extends Shape
{
    /**
     * @param array{
     *     RelyingPartyId?: string,
     *     UserVerification?: 'required'|'preferred'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
