<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $phoneNumber
 */
class LinkedAccountSms extends Shape
{
    /**
     * @param array{phoneNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
