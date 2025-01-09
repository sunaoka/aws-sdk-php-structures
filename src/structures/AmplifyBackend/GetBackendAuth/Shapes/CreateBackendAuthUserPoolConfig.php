<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateBackendAuthForgotPasswordConfig $ForgotPassword
 * @property CreateBackendAuthMFAConfig $Mfa
 * @property CreateBackendAuthOAuthConfig $OAuth
 * @property CreateBackendAuthPasswordPolicyConfig $PasswordPolicy
 * @property list<'ADDRESS'|'BIRTHDATE'|'EMAIL'|'FAMILY_NAME'|'GENDER'|'GIVEN_NAME'|'LOCALE'|'MIDDLE_NAME'|'NAME'|'NICKNAME'|'PHONE_NUMBER'|'PICTURE'|'PREFERRED_USERNAME'|'PROFILE'|'UPDATED_AT'|'WEBSITE'|'ZONE_INFO'> $RequiredSignUpAttributes
 * @property 'EMAIL'|'EMAIL_AND_PHONE_NUMBER'|'PHONE_NUMBER'|'USERNAME' $SignInMethod
 * @property string $UserPoolName
 * @property CreateBackendAuthVerificationMessageConfig $VerificationMessage
 */
class CreateBackendAuthUserPoolConfig extends Shape
{
    /**
     * @param array{
     *     ForgotPassword?: CreateBackendAuthForgotPasswordConfig,
     *     Mfa?: CreateBackendAuthMFAConfig,
     *     OAuth?: CreateBackendAuthOAuthConfig,
     *     PasswordPolicy?: CreateBackendAuthPasswordPolicyConfig,
     *     RequiredSignUpAttributes: list<'ADDRESS'|'BIRTHDATE'|'EMAIL'|'FAMILY_NAME'|'GENDER'|'GIVEN_NAME'|'LOCALE'|'MIDDLE_NAME'|'NAME'|'NICKNAME'|'PHONE_NUMBER'|'PICTURE'|'PREFERRED_USERNAME'|'PROFILE'|'UPDATED_AT'|'WEBSITE'|'ZONE_INFO'>,
     *     SignInMethod: 'EMAIL'|'EMAIL_AND_PHONE_NUMBER'|'PHONE_NUMBER'|'USERNAME',
     *     UserPoolName: string,
     *     VerificationMessage?: CreateBackendAuthVerificationMessageConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
