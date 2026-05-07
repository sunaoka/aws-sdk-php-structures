<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string|null $agentName
 * @property string $paymentManagerArn
 * @property string|null $paymentConnectorId
 * @property string $paymentInstrumentId
 */
class GetPaymentInstrumentRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     agentName?: string|null,
     *     paymentManagerArn: string,
     *     paymentConnectorId?: string|null,
     *     paymentInstrumentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
