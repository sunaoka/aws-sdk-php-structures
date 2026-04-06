<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminRespondToAuthChallenge;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SMS_MFA'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|null $ChallengeName
 * @property string|null $Session
 * @property array<string, string>|null $ChallengeParameters
 * @property Shapes\AuthenticationResultType|null $AuthenticationResult
 */
class AdminRespondToAuthChallengeResponse extends Response
{
}
