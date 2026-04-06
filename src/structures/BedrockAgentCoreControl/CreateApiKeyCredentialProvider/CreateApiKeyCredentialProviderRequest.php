<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateApiKeyCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $apiKey
 * @property array<string, string>|null $tags
 */
class CreateApiKeyCredentialProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     apiKey: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
