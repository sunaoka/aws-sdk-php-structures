<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASE'|'SOLANA' $Chain
 * @property list<ConnectedAccountPrice> $Prices
 */
class ConnectedAccountChainConfig extends Shape
{
    /**
     * @param array{
     *     Chain: 'BASE'|'SOLANA',
     *     Prices: list<ConnectedAccountPrice>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
