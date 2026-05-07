<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property Secret $appSecretArn
 * @property Secret $authorizationPrivateKeyArn
 * @property string $authorizationId
 */
class StripePrivyConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     appSecretArn: Secret,
     *     authorizationPrivateKeyArn: Secret,
     *     authorizationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
