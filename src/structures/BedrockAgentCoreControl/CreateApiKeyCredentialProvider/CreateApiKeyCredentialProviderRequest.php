<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateApiKeyCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $apiKey
 */
class CreateApiKeyCredentialProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     apiKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
