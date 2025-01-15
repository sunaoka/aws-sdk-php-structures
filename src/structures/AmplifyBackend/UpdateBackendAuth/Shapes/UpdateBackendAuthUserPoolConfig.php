<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateBackendAuthForgotPasswordConfig|null $ForgotPassword
 * @property UpdateBackendAuthMFAConfig|null $Mfa
 * @property UpdateBackendAuthOAuthConfig|null $OAuth
 * @property UpdateBackendAuthPasswordPolicyConfig|null $PasswordPolicy
 * @property UpdateBackendAuthVerificationMessageConfig|null $VerificationMessage
 */
class UpdateBackendAuthUserPoolConfig extends Shape
{
    /**
     * @param array{
     *     ForgotPassword?: UpdateBackendAuthForgotPasswordConfig|null,
     *     Mfa?: UpdateBackendAuthMFAConfig|null,
     *     OAuth?: UpdateBackendAuthOAuthConfig|null,
     *     PasswordPolicy?: UpdateBackendAuthPasswordPolicyConfig|null,
     *     VerificationMessage?: UpdateBackendAuthVerificationMessageConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
