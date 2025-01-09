<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property 'USER_SRP_AUTH'|'REFRESH_TOKEN_AUTH'|'REFRESH_TOKEN'|'CUSTOM_AUTH'|'ADMIN_NO_SRP_AUTH'|'USER_PASSWORD_AUTH'|'ADMIN_USER_PASSWORD_AUTH'|'USER_AUTH' $AuthFlow
 * @property array<string, string> $AuthParameters
 * @property array<string, string> $ClientMetadata
 * @property Shapes\AnalyticsMetadataType $AnalyticsMetadata
 * @property Shapes\ContextDataType $ContextData
 * @property string $Session
 */
class AdminInitiateAuthRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     AuthFlow: 'USER_SRP_AUTH'|'REFRESH_TOKEN_AUTH'|'REFRESH_TOKEN'|'CUSTOM_AUTH'|'ADMIN_NO_SRP_AUTH'|'USER_PASSWORD_AUTH'|'ADMIN_USER_PASSWORD_AUTH'|'USER_AUTH',
     *     AuthParameters?: array<string, string>,
     *     ClientMetadata?: array<string, string>,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType,
     *     ContextData?: Shapes\ContextDataType,
     *     Session?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
