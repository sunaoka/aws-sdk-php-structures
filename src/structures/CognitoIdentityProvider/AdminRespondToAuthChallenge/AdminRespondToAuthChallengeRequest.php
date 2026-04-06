<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminRespondToAuthChallenge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property 'SMS_MFA'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED' $ChallengeName
 * @property array<string, string>|null $ChallengeResponses
 * @property string|null $Session
 * @property Shapes\AnalyticsMetadataType|null $AnalyticsMetadata
 * @property Shapes\ContextDataType|null $ContextData
 * @property array<string, string>|null $ClientMetadata
 */
class AdminRespondToAuthChallengeRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     ChallengeName: 'SMS_MFA'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED',
     *     ChallengeResponses?: array<string, string>|null,
     *     Session?: string|null,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType|null,
     *     ContextData?: Shapes\ContextDataType|null,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
