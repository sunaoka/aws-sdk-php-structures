<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientName
 * @property bool $GenerateSecret
 * @property int $RefreshTokenValidity
 * @property int $AccessTokenValidity
 * @property int $IdTokenValidity
 * @property Shapes\TokenValidityUnitsType $TokenValidityUnits
 * @property list<string> $ReadAttributes
 * @property list<string> $WriteAttributes
 * @property list<'ADMIN_NO_SRP_AUTH'|'CUSTOM_AUTH_FLOW_ONLY'|'USER_PASSWORD_AUTH'|'ALLOW_ADMIN_USER_PASSWORD_AUTH'|'ALLOW_CUSTOM_AUTH'|'ALLOW_USER_PASSWORD_AUTH'|'ALLOW_USER_SRP_AUTH'|'ALLOW_REFRESH_TOKEN_AUTH'|'ALLOW_USER_AUTH'> $ExplicitAuthFlows
 * @property list<string> $SupportedIdentityProviders
 * @property list<string> $CallbackURLs
 * @property list<string> $LogoutURLs
 * @property string $DefaultRedirectURI
 * @property list<'code'|'implicit'|'client_credentials'> $AllowedOAuthFlows
 * @property list<string> $AllowedOAuthScopes
 * @property bool $AllowedOAuthFlowsUserPoolClient
 * @property Shapes\AnalyticsConfigurationType $AnalyticsConfiguration
 * @property 'LEGACY'|'ENABLED' $PreventUserExistenceErrors
 * @property bool $EnableTokenRevocation
 * @property bool $EnablePropagateAdditionalUserContextData
 * @property int $AuthSessionValidity
 */
class CreateUserPoolClientRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientName: string,
     *     GenerateSecret?: bool,
     *     RefreshTokenValidity?: int,
     *     AccessTokenValidity?: int,
     *     IdTokenValidity?: int,
     *     TokenValidityUnits?: Shapes\TokenValidityUnitsType,
     *     ReadAttributes?: list<string>,
     *     WriteAttributes?: list<string>,
     *     ExplicitAuthFlows?: list<'ADMIN_NO_SRP_AUTH'|'CUSTOM_AUTH_FLOW_ONLY'|'USER_PASSWORD_AUTH'|'ALLOW_ADMIN_USER_PASSWORD_AUTH'|'ALLOW_CUSTOM_AUTH'|'ALLOW_USER_PASSWORD_AUTH'|'ALLOW_USER_SRP_AUTH'|'ALLOW_REFRESH_TOKEN_AUTH'|'ALLOW_USER_AUTH'>,
     *     SupportedIdentityProviders?: list<string>,
     *     CallbackURLs?: list<string>,
     *     LogoutURLs?: list<string>,
     *     DefaultRedirectURI?: string,
     *     AllowedOAuthFlows?: list<'code'|'implicit'|'client_credentials'>,
     *     AllowedOAuthScopes?: list<string>,
     *     AllowedOAuthFlowsUserPoolClient?: bool,
     *     AnalyticsConfiguration?: Shapes\AnalyticsConfigurationType,
     *     PreventUserExistenceErrors?: 'LEGACY'|'ENABLED',
     *     EnableTokenRevocation?: bool,
     *     EnablePropagateAdditionalUserContextData?: bool,
     *     AuthSessionValidity?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
