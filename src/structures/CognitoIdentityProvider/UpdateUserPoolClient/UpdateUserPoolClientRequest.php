<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string $ClientName
 * @property int<0, 315360000> $RefreshTokenValidity
 * @property int<1, 86400> $AccessTokenValidity
 * @property int<1, 86400> $IdTokenValidity
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
 * @property int<3, 15> $AuthSessionValidity
 */
class UpdateUserPoolClientRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     ClientName?: string,
     *     RefreshTokenValidity?: int<0, 315360000>,
     *     AccessTokenValidity?: int<1, 86400>,
     *     IdTokenValidity?: int<1, 86400>,
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
     *     AuthSessionValidity?: int<3, 15>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
