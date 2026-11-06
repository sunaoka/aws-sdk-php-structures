<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectedAccountArn
 * @property list<ConnectedAccountChainConfig> $PaymentNetworks
 */
class ConnectedAccountConfig extends Shape
{
    /**
     * @param array{
     *     ConnectedAccountArn: string,
     *     PaymentNetworks: list<ConnectedAccountChainConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
