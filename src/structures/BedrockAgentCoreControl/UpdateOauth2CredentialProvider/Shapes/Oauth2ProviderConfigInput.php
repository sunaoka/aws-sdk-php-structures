<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomOauth2ProviderConfigInput|null $customOauth2ProviderConfig
 * @property GoogleOauth2ProviderConfigInput|null $googleOauth2ProviderConfig
 * @property GithubOauth2ProviderConfigInput|null $githubOauth2ProviderConfig
 * @property SlackOauth2ProviderConfigInput|null $slackOauth2ProviderConfig
 * @property SalesforceOauth2ProviderConfigInput|null $salesforceOauth2ProviderConfig
 * @property MicrosoftOauth2ProviderConfigInput|null $microsoftOauth2ProviderConfig
 * @property AtlassianOauth2ProviderConfigInput|null $atlassianOauth2ProviderConfig
 * @property LinkedinOauth2ProviderConfigInput|null $linkedinOauth2ProviderConfig
 * @property IncludedOauth2ProviderConfigInput|null $includedOauth2ProviderConfig
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
     *     microsoftOauth2ProviderConfig?: MicrosoftOauth2ProviderConfigInput|null,
     *     atlassianOauth2ProviderConfig?: AtlassianOauth2ProviderConfigInput|null,
     *     linkedinOauth2ProviderConfig?: LinkedinOauth2ProviderConfigInput|null,
     *     includedOauth2ProviderConfig?: IncludedOauth2ProviderConfigInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
