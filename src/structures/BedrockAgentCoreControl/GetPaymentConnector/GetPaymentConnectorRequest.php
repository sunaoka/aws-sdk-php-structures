<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 * @property string $paymentConnectorId
 */
class GetPaymentConnectorRequest extends Request
{
    /**
     * @param array{
     *     paymentManagerId: string,
     *     paymentConnectorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
