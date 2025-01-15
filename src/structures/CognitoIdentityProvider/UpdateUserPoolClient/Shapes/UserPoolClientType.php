<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserPoolId
 * @property string|null $ClientName
 * @property string|null $ClientId
 * @property string|null $ClientSecret
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property int<0, 315360000>|null $RefreshTokenValidity
 * @property int<1, 86400>|null $AccessTokenValidity
 * @property int<1, 86400>|null $IdTokenValidity
 * @property TokenValidityUnitsType|null $TokenValidityUnits
 * @property list<string>|null $ReadAttributes
 * @property list<string>|null $WriteAttributes
 * @property list<'ADMIN_NO_SRP_AUTH'|'CUSTOM_AUTH_FLOW_ONLY'|'USER_PASSWORD_AUTH'|'ALLOW_ADMIN_USER_PASSWORD_AUTH'|'ALLOW_CUSTOM_AUTH'|'ALLOW_USER_PASSWORD_AUTH'|'ALLOW_USER_SRP_AUTH'|'ALLOW_REFRESH_TOKEN_AUTH'|'ALLOW_USER_AUTH'>|null $ExplicitAuthFlows
 * @property list<string>|null $SupportedIdentityProviders
 * @property list<string>|null $CallbackURLs
 * @property list<string>|null $LogoutURLs
 * @property string|null $DefaultRedirectURI
 * @property list<'code'|'implicit'|'client_credentials'>|null $AllowedOAuthFlows
 * @property list<string>|null $AllowedOAuthScopes
 * @property bool|null $AllowedOAuthFlowsUserPoolClient
 * @property AnalyticsConfigurationType|null $AnalyticsConfiguration
 * @property 'LEGACY'|'ENABLED'|null $PreventUserExistenceErrors
 * @property bool|null $EnableTokenRevocation
 * @property bool|null $EnablePropagateAdditionalUserContextData
 * @property int<3, 15>|null $AuthSessionValidity
 */
class UserPoolClientType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string|null,
     *     ClientName?: string|null,
     *     ClientId?: string|null,
     *     ClientSecret?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     RefreshTokenValidity?: int<0, 315360000>|null,
     *     AccessTokenValidity?: int<1, 86400>|null,
     *     IdTokenValidity?: int<1, 86400>|null,
     *     TokenValidityUnits?: TokenValidityUnitsType|null,
     *     ReadAttributes?: list<string>|null,
     *     WriteAttributes?: list<string>|null,
     *     ExplicitAuthFlows?: list<'ADMIN_NO_SRP_AUTH'|'CUSTOM_AUTH_FLOW_ONLY'|'USER_PASSWORD_AUTH'|'ALLOW_ADMIN_USER_PASSWORD_AUTH'|'ALLOW_CUSTOM_AUTH'|'ALLOW_USER_PASSWORD_AUTH'|'ALLOW_USER_SRP_AUTH'|'ALLOW_REFRESH_TOKEN_AUTH'|'ALLOW_USER_AUTH'>|null,
     *     SupportedIdentityProviders?: list<string>|null,
     *     CallbackURLs?: list<string>|null,
     *     LogoutURLs?: list<string>|null,
     *     DefaultRedirectURI?: string|null,
     *     AllowedOAuthFlows?: list<'code'|'implicit'|'client_credentials'>|null,
     *     AllowedOAuthScopes?: list<string>|null,
     *     AllowedOAuthFlowsUserPoolClient?: bool|null,
     *     AnalyticsConfiguration?: AnalyticsConfigurationType|null,
     *     PreventUserExistenceErrors?: 'LEGACY'|'ENABLED'|null,
     *     EnableTokenRevocation?: bool|null,
     *     EnablePropagateAdditionalUserContextData?: bool|null,
     *     AuthSessionValidity?: int<3, 15>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
