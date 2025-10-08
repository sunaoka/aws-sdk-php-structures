<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateApiKeyCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $apiKey
 */
class UpdateApiKeyCredentialProviderRequest extends Request
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
