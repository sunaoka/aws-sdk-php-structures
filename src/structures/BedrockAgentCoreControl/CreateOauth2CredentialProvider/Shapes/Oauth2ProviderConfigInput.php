<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomOauth2ProviderConfigInput|null $customOauth2ProviderConfig
 * @property GoogleOauth2ProviderConfigInput|null $googleOauth2ProviderConfig
 * @property GithubOauth2ProviderConfigInput|null $githubOauth2ProviderConfig
 * @property SlackOauth2ProviderConfigInput|null $slackOauth2ProviderConfig
 * @property SalesforceOauth2ProviderConfigInput|null $salesforceOauth2ProviderConfig
 * @property MicrosoftOauth2ProviderConfigInput|null $microsoftOauth2ProviderConfig
 */
class Oauth2ProviderConfigInput extends Shape
{
    /**
     * @param array{
     *     customOauth2ProviderConfig?: CustomOauth2ProviderConfigInput|null,
     *     googleOauth2ProviderConfig?: GoogleOauth2ProviderConfigInput|null,
     *     githubOauth2ProviderConfig?: GithubOauth2ProviderConfigInput|null,
     *     slackOauth2ProviderConfig?: SlackOauth2ProviderConfigInput|null,
     *     salesforceOauth2ProviderConfig?: SalesforceOauth2ProviderConfigInput|null,
     *     microsoftOauth2ProviderConfig?: MicrosoftOauth2ProviderConfigInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
