<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property list<string> $wwwAuthenticateHeaders
 * @property bool|null $buyerPaysGasFees
 */
class MppPaymentInput extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     wwwAuthenticateHeaders: list<string>,
     *     buyerPaysGasFees?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
