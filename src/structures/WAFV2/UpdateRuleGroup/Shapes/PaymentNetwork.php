<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASE'|'SOLANA'|'BASE_SEPOLIA'|'SOLANA_DEVNET' $Chain
 * @property string $WalletAddress
 * @property list<Price> $Prices
 */
class PaymentNetwork extends Shape
{
    /**
     * @param array{
     *     Chain: 'BASE'|'SOLANA'|'BASE_SEPOLIA'|'SOLANA_DEVNET',
     *     WalletAddress: string,
     *     Prices: list<Price>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
