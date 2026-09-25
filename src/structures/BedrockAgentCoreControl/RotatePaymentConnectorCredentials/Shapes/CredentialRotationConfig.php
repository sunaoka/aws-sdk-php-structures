<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\RotatePaymentConnectorCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoinbaseCdpRotationTargets|null $coinbaseCDP
 */
class CredentialRotationConfig extends Shape
{
    /**
     * @param array{coinbaseCDP?: CoinbaseCdpRotationTargets|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
