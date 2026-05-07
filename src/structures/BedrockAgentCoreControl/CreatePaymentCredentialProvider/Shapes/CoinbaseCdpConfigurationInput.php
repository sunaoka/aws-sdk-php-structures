<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKeyId
 * @property string $apiKeySecret
 * @property string $walletSecret
 */
class CoinbaseCdpConfigurationInput extends Shape
{
    /**
     * @param array{
     *     apiKeyId: string,
     *     apiKeySecret: string,
     *     walletSecret: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
