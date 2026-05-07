<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourcePaymentToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $requestHost
 * @property string $requestPath
 * @property string $requestBody
 * @property bool|null $includeAuthorizationSignature
 */
class StripePrivyTokenRequestInput extends Shape
{
    /**
     * @param array{
     *     requestHost?: string|null,
     *     requestPath: string,
     *     requestBody: string,
     *     includeAuthorizationSignature?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
