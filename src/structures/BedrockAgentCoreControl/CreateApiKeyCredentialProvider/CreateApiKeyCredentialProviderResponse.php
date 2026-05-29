<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateApiKeyCredentialProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Secret $apiKeySecretArn
 * @property string|null $apiKeySecretJsonKey
 * @property 'MANAGED'|'EXTERNAL'|null $apiKeySecretSource
 * @property string $name
 * @property string $credentialProviderArn
 */
class CreateApiKeyCredentialProviderResponse extends Response
{
}
