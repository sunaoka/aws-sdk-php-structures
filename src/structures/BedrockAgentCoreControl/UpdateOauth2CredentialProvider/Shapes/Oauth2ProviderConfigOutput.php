<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomOauth2ProviderConfigOutput|null $customOauth2ProviderConfig
 * @property GoogleOauth2ProviderConfigOutput|null $googleOauth2ProviderConfig
 * @property GithubOauth2ProviderConfigOutput|null $githubOauth2ProviderConfig
 * @property SlackOauth2ProviderConfigOutput|null $slackOauth2ProviderConfig
 * @property SalesforceOauth2ProviderConfigOutput|null $salesforceOauth2ProviderConfig
 * @property MicrosoftOauth2ProviderConfigOutput|null $microsoftOauth2ProviderConfig
 */
class Oauth2ProviderConfigOutput extends Shape
{
    /**
     * @param array{
     *     customOauth2ProviderConfig?: CustomOauth2ProviderConfigOutput|null,
     *     googleOauth2ProviderConfig?: GoogleOauth2ProviderConfigOutput|null,
     *     githubOauth2ProviderConfig?: GithubOauth2ProviderConfigOutput|null,
     *     slackOauth2ProviderConfig?: SlackOauth2ProviderConfigOutput|null,
     *     salesforceOauth2ProviderConfig?: SalesforceOauth2ProviderConfigOutput|null,
     *     microsoftOauth2ProviderConfig?: MicrosoftOauth2ProviderConfigOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
