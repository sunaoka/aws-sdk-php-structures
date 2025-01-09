<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RespondToAuthChallenge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property 'SMS_MFA'|'EMAIL_OTP'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'SELECT_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|'SMS_OTP'|'PASSWORD'|'WEB_AUTHN'|'PASSWORD_SRP' $ChallengeName
 * @property string $Session
 * @property array<string, string> $ChallengeResponses
 * @property Shapes\AnalyticsMetadataType $AnalyticsMetadata
 * @property Shapes\UserContextDataType $UserContextData
 * @property array<string, string> $ClientMetadata
 */
class RespondToAuthChallengeRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     ChallengeName: 'SMS_MFA'|'EMAIL_OTP'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'SELECT_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|'SMS_OTP'|'PASSWORD'|'WEB_AUTHN'|'PASSWORD_SRP',
     *     Session?: string,
     *     ChallengeResponses?: array<string, string>,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType,
     *     UserContextData?: Shapes\UserContextDataType,
     *     ClientMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
