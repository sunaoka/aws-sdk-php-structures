<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string|null $agentName
 * @property string $paymentManagerArn
 * @property string $paymentSessionId
 */
class GetPaymentSessionRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     agentName?: string|null,
     *     paymentManagerArn: string,
     *     paymentSessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
