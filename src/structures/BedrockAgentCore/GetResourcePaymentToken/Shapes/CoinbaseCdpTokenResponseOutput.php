<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourcePaymentToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bearerToken
 * @property string|null $walletAuthToken
 */
class CoinbaseCdpTokenResponseOutput extends Shape
{
    /**
     * @param array{
     *     bearerToken: string,
     *     walletAuthToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
