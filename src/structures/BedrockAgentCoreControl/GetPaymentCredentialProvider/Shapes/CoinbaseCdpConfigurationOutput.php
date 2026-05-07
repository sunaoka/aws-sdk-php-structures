<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKeyId
 * @property Secret $apiKeySecretArn
 * @property Secret $walletSecretArn
 */
class CoinbaseCdpConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     apiKeyId: string,
     *     apiKeySecretArn: Secret,
     *     walletSecretArn: Secret
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
