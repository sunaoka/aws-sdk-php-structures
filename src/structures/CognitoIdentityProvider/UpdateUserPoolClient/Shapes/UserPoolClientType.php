<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolId
 * @property string $ClientName
 * @property string $ClientId
 * @property string $ClientSecret
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property int<0, 315360000> $RefreshTokenValidity
 * @property int<1, 86400> $AccessTokenValidity
 * @property int<1, 86400> $IdTokenValidity
 * @property TokenValidityUnitsType $TokenValidityUnits
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
 * @property AnalyticsConfigurationType $AnalyticsConfiguration
 * @property 'LEGACY'|'ENABLED' $PreventUserExistenceErrors
 * @property bool $EnableTokenRevocation
 * @property bool $EnablePropagateAdditionalUserContextData
 * @property int<3, 15> $AuthSessionValidity
 */
class UserPoolClientType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string,
     *     ClientName?: string,
     *     ClientId?: string,
     *     ClientSecret?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     RefreshTokenValidity?: int<0, 315360000>,
     *     AccessTokenValidity?: int<1, 86400>,
     *     IdTokenValidity?: int<1, 86400>,
     *     TokenValidityUnits?: TokenValidityUnitsType,
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
     *     AnalyticsConfiguration?: AnalyticsConfigurationType,
     *     PreventUserExistenceErrors?: 'LEGACY'|'ENABLED',
     *     EnableTokenRevocation?: bool,
     *     EnablePropagateAdditionalUserContextData?: bool,
     *     AuthSessionValidity?: int<3, 15>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
