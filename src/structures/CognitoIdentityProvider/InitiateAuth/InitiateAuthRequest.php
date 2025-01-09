<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\InitiateAuth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'USER_SRP_AUTH'|'REFRESH_TOKEN_AUTH'|'REFRESH_TOKEN'|'CUSTOM_AUTH'|'ADMIN_NO_SRP_AUTH'|'USER_PASSWORD_AUTH'|'ADMIN_USER_PASSWORD_AUTH'|'USER_AUTH' $AuthFlow
 * @property array<string, string> $AuthParameters
 * @property array<string, string> $ClientMetadata
 * @property string $ClientId
 * @property Shapes\AnalyticsMetadataType $AnalyticsMetadata
 * @property Shapes\UserContextDataType $UserContextData
 * @property string $Session
 */
class InitiateAuthRequest extends Request
{
    /**
     * @param array{
     *     AuthFlow: 'USER_SRP_AUTH'|'REFRESH_TOKEN_AUTH'|'REFRESH_TOKEN'|'CUSTOM_AUTH'|'ADMIN_NO_SRP_AUTH'|'USER_PASSWORD_AUTH'|'ADMIN_USER_PASSWORD_AUTH'|'USER_AUTH',
     *     AuthParameters?: array<string, string>,
     *     ClientMetadata?: array<string, string>,
     *     ClientId: string,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType,
     *     UserContextData?: Shapes\UserContextDataType,
     *     Session?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
