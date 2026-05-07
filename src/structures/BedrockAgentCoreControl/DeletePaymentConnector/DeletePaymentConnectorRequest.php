<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePaymentConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 * @property string $paymentConnectorId
 * @property string|null $clientToken
 */
class DeletePaymentConnectorRequest extends Request
{
    /**
     * @param array{
     *     paymentManagerId: string,
     *     paymentConnectorId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
