<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER_POOL_ONLY'|'IDENTITY_POOL_AND_USER_POOL' $AuthResources
 * @property CreateBackendAuthIdentityPoolConfig $IdentityPoolConfigs
 * @property 'COGNITO' $Service
 * @property CreateBackendAuthUserPoolConfig $UserPoolConfigs
 */
class CreateBackendAuthResourceConfig extends Shape
{
    /**
     * @param array{
     *     AuthResources: 'USER_POOL_ONLY'|'IDENTITY_POOL_AND_USER_POOL',
     *     IdentityPoolConfigs?: CreateBackendAuthIdentityPoolConfig,
     *     Service: 'COGNITO',
     *     UserPoolConfigs: CreateBackendAuthUserPoolConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
