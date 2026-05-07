<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreatePaymentSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string|null $agentName
 * @property string $paymentManagerArn
 * @property Shapes\SessionLimits|null $limits
 * @property int<15, 480> $expiryTimeInMinutes
 * @property string|null $clientToken
 */
class CreatePaymentSessionRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     agentName?: string|null,
     *     paymentManagerArn: string,
     *     limits?: Shapes\SessionLimits|null,
     *     expiryTimeInMinutes: int<15, 480>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
