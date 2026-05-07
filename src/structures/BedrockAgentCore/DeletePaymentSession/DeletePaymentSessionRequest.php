<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeletePaymentSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string $paymentManagerArn
 * @property string $paymentSessionId
 */
class DeletePaymentSessionRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     paymentManagerArn: string,
     *     paymentSessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
