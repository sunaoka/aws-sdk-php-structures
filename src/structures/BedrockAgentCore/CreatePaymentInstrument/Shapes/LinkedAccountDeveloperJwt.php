<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreatePaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kid
 * @property string $sub
 */
class LinkedAccountDeveloperJwt extends Shape
{
    /**
     * @param array{
     *     kid: string,
     *     sub: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
