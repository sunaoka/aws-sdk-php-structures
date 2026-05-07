<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrumentBalance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $amount
 * @property int $decimals
 * @property 'USDC' $token
 * @property 'ETHEREUM'|'SOLANA' $network
 * @property 'BASE'|'BASE_SEPOLIA'|'ETHEREUM'|'SOLANA'|'SOLANA_DEVNET' $chain
 */
class TokenBalance extends Shape
{
    /**
     * @param array{
     *     amount: string,
     *     decimals: int,
     *     token: 'USDC',
     *     network: 'ETHEREUM'|'SOLANA',
     *     chain: 'BASE'|'BASE_SEPOLIA'|'ETHEREUM'|'SOLANA'|'SOLANA_DEVNET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
