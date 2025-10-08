<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListOauth2CredentialProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'GoogleOauth2'|'GithubOauth2'|'SlackOauth2'|'SalesforceOauth2'|'MicrosoftOauth2'|'CustomOauth2' $credentialProviderVendor
 * @property string $credentialProviderArn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class Oauth2CredentialProviderItem extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     credentialProviderVendor: 'GoogleOauth2'|'GithubOauth2'|'SlackOauth2'|'SalesforceOauth2'|'MicrosoftOauth2'|'CustomOauth2',
     *     credentialProviderArn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
