<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOauth2CredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'GoogleOauth2'|'GithubOauth2'|'SlackOauth2'|'SalesforceOauth2'|'MicrosoftOauth2'|'CustomOauth2'|'AtlassianOauth2'|'LinkedinOauth2'|'XOauth2'|'OktaOauth2'|'OneLoginOauth2'|'PingOneOauth2'|'FacebookOauth2'|'YandexOauth2'|'RedditOauth2'|'ZoomOauth2'|'TwitchOauth2'|'SpotifyOauth2'|'DropboxOauth2'|'NotionOauth2'|'HubspotOauth2'|'CyberArkOauth2'|'FusionAuthOauth2'|'Auth0Oauth2'|'CognitoOauth2' $credentialProviderVendor
 * @property Shapes\Oauth2ProviderConfigInput $oauth2ProviderConfigInput
 * @property array<string, string>|null $tags
 */
class CreateOauth2CredentialProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     credentialProviderVendor: 'GoogleOauth2'|'GithubOauth2'|'SlackOauth2'|'SalesforceOauth2'|'MicrosoftOauth2'|'CustomOauth2'|'AtlassianOauth2'|'LinkedinOauth2'|'XOauth2'|'OktaOauth2'|'OneLoginOauth2'|'PingOneOauth2'|'FacebookOauth2'|'YandexOauth2'|'RedditOauth2'|'ZoomOauth2'|'TwitchOauth2'|'SpotifyOauth2'|'DropboxOauth2'|'NotionOauth2'|'HubspotOauth2'|'CyberArkOauth2'|'FusionAuthOauth2'|'Auth0Oauth2'|'CognitoOauth2',
     *     oauth2ProviderConfigInput: Shapes\Oauth2ProviderConfigInput,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
