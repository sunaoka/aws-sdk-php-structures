<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\InitiateAuth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'USER_SRP_AUTH'|'REFRESH_TOKEN_AUTH'|'REFRESH_TOKEN'|'CUSTOM_AUTH'|'ADMIN_NO_SRP_AUTH'|'USER_PASSWORD_AUTH'|'ADMIN_USER_PASSWORD_AUTH'|'USER_AUTH' $AuthFlow
 * @property array<string, string>|null $AuthParameters
 * @property array<string, string>|null $ClientMetadata
 * @property string $ClientId
 * @property Shapes\AnalyticsMetadataType|null $AnalyticsMetadata
 * @property Shapes\UserContextDataType|null $UserContextData
 * @property string|null $Session
 */
class InitiateAuthRequest extends Request
{
    /**
     * @param array{
     *     AuthFlow: 'USER_SRP_AUTH'|'REFRESH_TOKEN_AUTH'|'REFRESH_TOKEN'|'CUSTOM_AUTH'|'ADMIN_NO_SRP_AUTH'|'USER_PASSWORD_AUTH'|'ADMIN_USER_PASSWORD_AUTH'|'USER_AUTH',
     *     AuthParameters?: array<string, string>|null,
     *     ClientMetadata?: array<string, string>|null,
     *     ClientId: string,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType|null,
     *     UserContextData?: Shapes\UserContextDataType|null,
     *     Session?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
