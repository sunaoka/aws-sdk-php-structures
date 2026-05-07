<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourcePaymentToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizationSignature
 * @property int|null $requestExpiry
 * @property string $appId
 * @property string $basicAuthToken
 */
class StripePrivyTokenResponseOutput extends Shape
{
    /**
     * @param array{
     *     authorizationSignature?: string|null,
     *     requestExpiry?: int|null,
     *     appId: string,
     *     basicAuthToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
