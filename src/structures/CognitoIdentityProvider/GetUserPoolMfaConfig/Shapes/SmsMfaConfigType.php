<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolMfaConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SmsAuthenticationMessage
 * @property SmsConfigurationType $SmsConfiguration
 */
class SmsMfaConfigType extends Shape
{
    /**
     * @param array{
     *     SmsAuthenticationMessage?: string,
     *     SmsConfiguration?: SmsConfigurationType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
