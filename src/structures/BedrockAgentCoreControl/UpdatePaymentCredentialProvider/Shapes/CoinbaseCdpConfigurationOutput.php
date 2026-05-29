<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKeyId
 * @property Secret $apiKeySecretArn
 * @property string|null $apiKeySecretJsonKey
 * @property 'MANAGED'|'EXTERNAL'|null $apiKeySecretSource
 * @property Secret $walletSecretArn
 * @property string|null $walletSecretJsonKey
 * @property 'MANAGED'|'EXTERNAL'|null $walletSecretSource
 */
class CoinbaseCdpConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     apiKeyId: string,
     *     apiKeySecretArn: Secret,
     *     apiKeySecretJsonKey?: string|null,
     *     apiKeySecretSource?: 'MANAGED'|'EXTERNAL'|null,
     *     walletSecretArn: Secret,
     *     walletSecretJsonKey?: string|null,
     *     walletSecretSource?: 'MANAGED'|'EXTERNAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
