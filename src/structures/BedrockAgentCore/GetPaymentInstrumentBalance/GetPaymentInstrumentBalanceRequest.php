<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrumentBalance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string|null $agentName
 * @property string $paymentManagerArn
 * @property string $paymentConnectorId
 * @property string $paymentInstrumentId
 * @property 'BASE'|'BASE_SEPOLIA'|'ETHEREUM'|'SOLANA'|'SOLANA_DEVNET' $chain
 * @property 'USDC' $token
 */
class GetPaymentInstrumentBalanceRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     agentName?: string|null,
     *     paymentManagerArn: string,
     *     paymentConnectorId: string,
     *     paymentInstrumentId: string,
     *     chain: 'BASE'|'BASE_SEPOLIA'|'ETHEREUM'|'SOLANA'|'SOLANA_DEVNET',
     *     token: 'USDC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
