<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RespondToAuthChallenge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property 'SMS_MFA'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED' $ChallengeName
 * @property string|null $Session
 * @property array<string, string>|null $ChallengeResponses
 * @property Shapes\AnalyticsMetadataType|null $AnalyticsMetadata
 * @property Shapes\UserContextDataType|null $UserContextData
 * @property array<string, string>|null $ClientMetadata
 */
class RespondToAuthChallengeRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     ChallengeName: 'SMS_MFA'|'SOFTWARE_TOKEN_MFA'|'SELECT_MFA_TYPE'|'MFA_SETUP'|'PASSWORD_VERIFIER'|'CUSTOM_CHALLENGE'|'DEVICE_SRP_AUTH'|'DEVICE_PASSWORD_VERIFIER'|'ADMIN_NO_SRP_AUTH'|'NEW_PASSWORD_REQUIRED',
     *     Session?: string|null,
     *     ChallengeResponses?: array<string, string>|null,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType|null,
     *     UserContextData?: Shapes\UserContextDataType|null,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
