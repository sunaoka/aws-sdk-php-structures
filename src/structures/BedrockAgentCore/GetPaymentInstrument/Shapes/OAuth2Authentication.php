<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sub
 * @property string|null $emailAddress
 * @property string|null $name
 * @property string|null $username
 */
class OAuth2Authentication extends Shape
{
    /**
     * @param array{
     *     sub: string,
     *     emailAddress?: string|null,
     *     name?: string|null,
     *     username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
