<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\InitiateAuth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SMS_MFA'|'EMAIL_OTP'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'SELECT_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|'SMS_OTP'|'PASSWORD'|'WEB_AUTHN'|'PASSWORD_SRP' $ChallengeName
 * @property string $Session
 * @property array<string, string> $ChallengeParameters
 * @property Shapes\AuthenticationResultType $AuthenticationResult
 * @property list<'SMS_MFA'|'EMAIL_OTP'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'SELECT_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|'SMS_OTP'|'PASSWORD'|'WEB_AUTHN'|'PASSWORD_SRP'> $AvailableChallenges
 */
class InitiateAuthResponse extends Response
{
}
