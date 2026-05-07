<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreatePaymentSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property 'USD' $currency
 */
class Amount extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     currency: 'USD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
