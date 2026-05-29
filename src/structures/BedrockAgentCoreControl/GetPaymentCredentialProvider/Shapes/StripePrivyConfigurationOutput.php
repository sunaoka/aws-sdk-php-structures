<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentCredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property Secret $appSecretArn
 * @property string|null $appSecretJsonKey
 * @property 'MANAGED'|'EXTERNAL'|null $appSecretSource
 * @property Secret $authorizationPrivateKeyArn
 * @property string|null $authorizationPrivateKeyJsonKey
 * @property 'MANAGED'|'EXTERNAL'|null $authorizationPrivateKeySource
 * @property string $authorizationId
 */
class StripePrivyConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     appSecretArn: Secret,
     *     appSecretJsonKey?: string|null,
     *     appSecretSource?: 'MANAGED'|'EXTERNAL'|null,
     *     authorizationPrivateKeyArn: Secret,
     *     authorizationPrivateKeyJsonKey?: string|null,
     *     authorizationPrivateKeySource?: 'MANAGED'|'EXTERNAL'|null,
     *     authorizationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
