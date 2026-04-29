<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GATEWAY_IAM_ROLE'|'OAUTH'|'API_KEY'|'CALLER_IAM_CREDENTIALS'|'JWT_PASSTHROUGH' $credentialProviderType
 * @property CredentialProvider|null $credentialProvider
 */
class CredentialProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     credentialProviderType: 'GATEWAY_IAM_ROLE'|'OAUTH'|'API_KEY'|'CALLER_IAM_CREDENTIALS'|'JWT_PASSTHROUGH',
     *     credentialProvider?: CredentialProvider|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
