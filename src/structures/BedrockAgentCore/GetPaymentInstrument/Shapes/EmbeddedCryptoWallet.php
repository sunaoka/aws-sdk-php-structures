<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ETHEREUM'|'SOLANA' $network
 * @property list<LinkedAccount> $linkedAccounts
 * @property string|null $walletAddress
 * @property string|null $redirectUrl
 */
class EmbeddedCryptoWallet extends Shape
{
    /**
     * @param array{
     *     network: 'ETHEREUM'|'SOLANA',
     *     linkedAccounts: list<LinkedAccount>,
     *     walletAddress?: string|null,
     *     redirectUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
