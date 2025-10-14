<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOauth2CredentialProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Secret $clientSecretArn
 * @property string $name
 * @property string $credentialProviderArn
 * @property string|null $callbackUrl
 * @property Shapes\Oauth2ProviderConfigOutput|null $oauth2ProviderConfigOutput
 */
class CreateOauth2CredentialProviderResponse extends Response
{
}
