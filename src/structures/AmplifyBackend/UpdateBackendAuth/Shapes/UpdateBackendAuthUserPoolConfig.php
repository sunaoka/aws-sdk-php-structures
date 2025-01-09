<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateBackendAuthForgotPasswordConfig $ForgotPassword
 * @property UpdateBackendAuthMFAConfig $Mfa
 * @property UpdateBackendAuthOAuthConfig $OAuth
 * @property UpdateBackendAuthPasswordPolicyConfig $PasswordPolicy
 * @property UpdateBackendAuthVerificationMessageConfig $VerificationMessage
 */
class UpdateBackendAuthUserPoolConfig extends Shape
{
    /**
     * @param array{
     *     ForgotPassword?: UpdateBackendAuthForgotPasswordConfig,
     *     Mfa?: UpdateBackendAuthMFAConfig,
     *     OAuth?: UpdateBackendAuthOAuthConfig,
     *     PasswordPolicy?: UpdateBackendAuthPasswordPolicyConfig,
     *     VerificationMessage?: UpdateBackendAuthVerificationMessageConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
