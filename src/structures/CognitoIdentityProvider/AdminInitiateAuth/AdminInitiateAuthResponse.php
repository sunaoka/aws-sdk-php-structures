<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SMS_MFA'|'EMAIL_OTP'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'SELECT_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|'SMS_OTP'|'PASSWORD'|'WEB_AUTHN'|'PASSWORD_SRP'|null $ChallengeName
 * @property string|null $Session
 * @property array<string, string>|null $ChallengeParameters
 * @property Shapes\AuthenticationResultType|null $AuthenticationResult
 * @property list<'SMS_MFA'|'EMAIL_OTP'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'SELECT_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|'SMS_OTP'|'PASSWORD'|'WEB_AUTHN'|'PASSWORD_SRP'>|null $AvailableChallenges
 */
class AdminInitiateAuthResponse extends Response
{
}
