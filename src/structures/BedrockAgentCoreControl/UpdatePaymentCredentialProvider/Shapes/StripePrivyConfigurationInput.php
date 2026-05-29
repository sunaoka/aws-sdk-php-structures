<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string|null $appSecret
 * @property 'MANAGED'|'EXTERNAL'|null $appSecretSource
 * @property SecretReference|null $appSecretConfig
 * @property string|null $authorizationPrivateKey
 * @property 'MANAGED'|'EXTERNAL'|null $authorizationPrivateKeySource
 * @property SecretReference|null $authorizationPrivateKeyConfig
 * @property string $authorizationId
 */
class StripePrivyConfigurationInput extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     appSecret?: string|null,
     *     appSecretSource?: 'MANAGED'|'EXTERNAL'|null,
     *     appSecretConfig?: SecretReference|null,
     *     authorizationPrivateKey?: string|null,
     *     authorizationPrivateKeySource?: 'MANAGED'|'EXTERNAL'|null,
     *     authorizationPrivateKeyConfig?: SecretReference|null,
     *     authorizationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
