<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property 'USER_SRP_AUTH'|'REFRESH_TOKEN_AUTH'|'REFRESH_TOKEN'|'CUSTOM_AUTH'|'ADMIN_NO_SRP_AUTH'|'USER_PASSWORD_AUTH'|'ADMIN_USER_PASSWORD_AUTH'|'USER_AUTH' $AuthFlow
 * @property array<string, string>|null $AuthParameters
 * @property array<string, string>|null $ClientMetadata
 * @property Shapes\AnalyticsMetadataType|null $AnalyticsMetadata
 * @property Shapes\ContextDataType|null $ContextData
 * @property string|null $Session
 */
class AdminInitiateAuthRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     AuthFlow: 'USER_SRP_AUTH'|'REFRESH_TOKEN_AUTH'|'REFRESH_TOKEN'|'CUSTOM_AUTH'|'ADMIN_NO_SRP_AUTH'|'USER_PASSWORD_AUTH'|'ADMIN_USER_PASSWORD_AUTH'|'USER_AUTH',
     *     AuthParameters?: array<string, string>|null,
     *     ClientMetadata?: array<string, string>|null,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType|null,
     *     ContextData?: Shapes\ContextDataType|null,
     *     Session?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
