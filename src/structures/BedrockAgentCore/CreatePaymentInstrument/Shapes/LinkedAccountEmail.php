<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreatePaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $emailAddress
 */
class LinkedAccountEmail extends Shape
{
    /**
     * @param array{emailAddress: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
