<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $appSecret
 * @property string $authorizationPrivateKey
 * @property string $authorizationId
 */
class StripePrivyConfigurationInput extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     appSecret: string,
     *     authorizationPrivateKey: string,
     *     authorizationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
