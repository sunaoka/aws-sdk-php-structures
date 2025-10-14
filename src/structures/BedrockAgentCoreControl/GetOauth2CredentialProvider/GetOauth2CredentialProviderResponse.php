<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOauth2CredentialProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Secret $clientSecretArn
 * @property string $name
 * @property string $credentialProviderArn
 * @property 'GoogleOauth2'|'GithubOauth2'|'SlackOauth2'|'SalesforceOauth2'|'MicrosoftOauth2'|'CustomOauth2'|'AtlassianOauth2'|'LinkedinOauth2'|'XOauth2'|'OktaOauth2'|'OneLoginOauth2'|'PingOneOauth2'|'FacebookOauth2'|'YandexOauth2'|'RedditOauth2'|'ZoomOauth2'|'TwitchOauth2'|'SpotifyOauth2'|'DropboxOauth2'|'NotionOauth2'|'HubspotOauth2'|'CyberArkOauth2'|'FusionAuthOauth2'|'Auth0Oauth2'|'CognitoOauth2' $credentialProviderVendor
 * @property string|null $callbackUrl
 * @property Shapes\Oauth2ProviderConfigOutput $oauth2ProviderConfigOutput
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class GetOauth2CredentialProviderResponse extends Response
{
}
