<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\RotatePaymentConnectorCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'API_KEY'|'WALLET_SECRET'> $secrets
 */
class CoinbaseCdpRotationTargets extends Shape
{
    /**
     * @param array{secrets: list<'API_KEY'|'WALLET_SECRET'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
