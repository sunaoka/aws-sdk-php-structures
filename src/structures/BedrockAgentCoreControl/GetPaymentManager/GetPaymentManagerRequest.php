<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 */
class GetPaymentManagerRequest extends Request
{
    /**
     * @param array{paymentManagerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
