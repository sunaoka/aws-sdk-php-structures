<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePaymentManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 * @property string|null $clientToken
 */
class DeletePaymentManagerRequest extends Request
{
    /**
     * @param array{
     *     paymentManagerId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
