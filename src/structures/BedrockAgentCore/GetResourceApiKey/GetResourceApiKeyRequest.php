<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourceApiKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadIdentityToken
 * @property string $resourceCredentialProviderName
 */
class GetResourceApiKeyRequest extends Request
{
    /**
     * @param array{
     *     workloadIdentityToken: string,
     *     resourceCredentialProviderName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
