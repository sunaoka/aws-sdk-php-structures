<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateBackendAuthForgotPasswordConfig|null $ForgotPassword
 * @property CreateBackendAuthMFAConfig|null $Mfa
 * @property CreateBackendAuthOAuthConfig|null $OAuth
 * @property CreateBackendAuthPasswordPolicyConfig|null $PasswordPolicy
 * @property list<'ADDRESS'|'BIRTHDATE'|'EMAIL'|'FAMILY_NAME'|'GENDER'|'GIVEN_NAME'|'LOCALE'|'MIDDLE_NAME'|'NAME'|'NICKNAME'|'PHONE_NUMBER'|'PICTURE'|'PREFERRED_USERNAME'|'PROFILE'|'UPDATED_AT'|'WEBSITE'|'ZONE_INFO'> $RequiredSignUpAttributes
 * @property 'EMAIL'|'EMAIL_AND_PHONE_NUMBER'|'PHONE_NUMBER'|'USERNAME' $SignInMethod
 * @property string $UserPoolName
 * @property CreateBackendAuthVerificationMessageConfig|null $VerificationMessage
 */
class CreateBackendAuthUserPoolConfig extends Shape
{
    /**
     * @param array{
     *     ForgotPassword?: CreateBackendAuthForgotPasswordConfig|null,
     *     Mfa?: CreateBackendAuthMFAConfig|null,
     *     OAuth?: CreateBackendAuthOAuthConfig|null,
     *     PasswordPolicy?: CreateBackendAuthPasswordPolicyConfig|null,
     *     RequiredSignUpAttributes: list<'ADDRESS'|'BIRTHDATE'|'EMAIL'|'FAMILY_NAME'|'GENDER'|'GIVEN_NAME'|'LOCALE'|'MIDDLE_NAME'|'NAME'|'NICKNAME'|'PHONE_NUMBER'|'PICTURE'|'PREFERRED_USERNAME'|'PROFILE'|'UPDATED_AT'|'WEBSITE'|'ZONE_INFO'>,
     *     SignInMethod: 'EMAIL'|'EMAIL_AND_PHONE_NUMBER'|'PHONE_NUMBER'|'USERNAME',
     *     UserPoolName: string,
     *     VerificationMessage?: CreateBackendAuthVerificationMessageConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
