<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'GoogleOauth2'|'GithubOauth2'|'SlackOauth2'|'SalesforceOauth2'|'MicrosoftOauth2'|'CustomOauth2' $credentialProviderVendor
 * @property Shapes\Oauth2ProviderConfigInput $oauth2ProviderConfigInput
 */
class UpdateOauth2CredentialProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     credentialProviderVendor: 'GoogleOauth2'|'GithubOauth2'|'SlackOauth2'|'SalesforceOauth2'|'MicrosoftOauth2'|'CustomOauth2',
     *     oauth2ProviderConfigInput: Shapes\Oauth2ProviderConfigInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
