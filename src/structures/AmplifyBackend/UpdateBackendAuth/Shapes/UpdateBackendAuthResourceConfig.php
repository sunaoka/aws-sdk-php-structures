<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER_POOL_ONLY'|'IDENTITY_POOL_AND_USER_POOL' $AuthResources
 * @property UpdateBackendAuthIdentityPoolConfig|null $IdentityPoolConfigs
 * @property 'COGNITO' $Service
 * @property UpdateBackendAuthUserPoolConfig $UserPoolConfigs
 */
class UpdateBackendAuthResourceConfig extends Shape
{
    /**
     * @param array{
     *     AuthResources: 'USER_POOL_ONLY'|'IDENTITY_POOL_AND_USER_POOL',
     *     IdentityPoolConfigs?: UpdateBackendAuthIdentityPoolConfig|null,
     *     Service: 'COGNITO',
     *     UserPoolConfigs: UpdateBackendAuthUserPoolConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
