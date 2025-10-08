<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOauth2CredentialProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Secret $clientSecretArn
 * @property string $name
 * @property string $credentialProviderArn
 * @property 'GoogleOauth2'|'GithubOauth2'|'SlackOauth2'|'SalesforceOauth2'|'MicrosoftOauth2'|'CustomOauth2' $credentialProviderVendor
 * @property Shapes\Oauth2ProviderConfigOutput $oauth2ProviderConfigOutput
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class GetOauth2CredentialProviderResponse extends Response
{
}
