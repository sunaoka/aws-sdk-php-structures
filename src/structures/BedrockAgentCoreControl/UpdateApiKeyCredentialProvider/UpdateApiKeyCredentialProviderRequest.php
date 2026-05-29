<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateApiKeyCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $apiKey
 * @property Shapes\SecretReference|null $apiKeySecretConfig
 * @property 'MANAGED'|'EXTERNAL'|null $apiKeySecretSource
 */
class UpdateApiKeyCredentialProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     apiKey?: string|null,
     *     apiKeySecretConfig?: Shapes\SecretReference|null,
     *     apiKeySecretSource?: 'MANAGED'|'EXTERNAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
