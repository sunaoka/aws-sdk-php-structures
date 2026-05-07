<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeletePaymentInstrument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string $paymentManagerArn
 * @property string $paymentConnectorId
 * @property string $paymentInstrumentId
 */
class DeletePaymentInstrumentRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     paymentManagerArn: string,
     *     paymentConnectorId: string,
     *     paymentInstrumentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
