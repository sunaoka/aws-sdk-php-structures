<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKeyId
 * @property string|null $apiKeySecret
 * @property 'MANAGED'|'EXTERNAL'|null $apiKeySecretSource
 * @property SecretReference|null $apiKeySecretConfig
 * @property string|null $walletSecret
 * @property 'MANAGED'|'EXTERNAL'|null $walletSecretSource
 * @property SecretReference|null $walletSecretConfig
 */
class CoinbaseCdpConfigurationInput extends Shape
{
    /**
     * @param array{
     *     apiKeyId: string,
     *     apiKeySecret?: string|null,
     *     apiKeySecretSource?: 'MANAGED'|'EXTERNAL'|null,
     *     apiKeySecretConfig?: SecretReference|null,
     *     walletSecret?: string|null,
     *     walletSecretSource?: 'MANAGED'|'EXTERNAL'|null,
     *     walletSecretConfig?: SecretReference|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
