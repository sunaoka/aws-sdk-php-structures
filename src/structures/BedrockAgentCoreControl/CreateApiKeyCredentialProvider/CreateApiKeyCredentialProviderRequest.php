<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateApiKeyCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $apiKey
 * @property Shapes\SecretReference|null $apiKeySecretConfig
 * @property 'MANAGED'|'EXTERNAL'|null $apiKeySecretSource
 * @property array<string, string>|null $tags
 */
class CreateApiKeyCredentialProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     apiKey?: string|null,
     *     apiKeySecretConfig?: Shapes\SecretReference|null,
     *     apiKeySecretSource?: 'MANAGED'|'EXTERNAL'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
