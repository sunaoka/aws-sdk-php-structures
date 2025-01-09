<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminRespondToAuthChallenge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property 'SMS_MFA'|'EMAIL_OTP'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'SELECT_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|'SMS_OTP'|'PASSWORD'|'WEB_AUTHN'|'PASSWORD_SRP' $ChallengeName
 * @property array<string, string> $ChallengeResponses
 * @property string $Session
 * @property Shapes\AnalyticsMetadataType $AnalyticsMetadata
 * @property Shapes\ContextDataType $ContextData
 * @property array<string, string> $ClientMetadata
 */
class AdminRespondToAuthChallengeRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     ChallengeName: 'SMS_MFA'|'EMAIL_OTP'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'SELECT_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED'|'SMS_OTP'|'PASSWORD'|'WEB_AUTHN'|'PASSWORD_SRP',
     *     ChallengeResponses?: array<string, string>,
     *     Session?: string,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType,
     *     ContextData?: Shapes\ContextDataType,
     *     ClientMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
