<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SmsAuthenticationMessage
 * @property SmsConfigurationType|null $SmsConfiguration
 */
class SmsMfaConfigType extends Shape
{
    /**
     * @param array{
     *     SmsAuthenticationMessage?: string|null,
     *     SmsConfiguration?: SmsConfigurationType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
