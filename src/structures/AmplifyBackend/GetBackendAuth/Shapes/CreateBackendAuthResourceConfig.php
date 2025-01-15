<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER_POOL_ONLY'|'IDENTITY_POOL_AND_USER_POOL' $AuthResources
 * @property CreateBackendAuthIdentityPoolConfig|null $IdentityPoolConfigs
 * @property 'COGNITO' $Service
 * @property CreateBackendAuthUserPoolConfig $UserPoolConfigs
 */
class CreateBackendAuthResourceConfig extends Shape
{
    /**
     * @param array{
     *     AuthResources: 'USER_POOL_ONLY'|'IDENTITY_POOL_AND_USER_POOL',
     *     IdentityPoolConfigs?: CreateBackendAuthIdentityPoolConfig|null,
     *     Service: 'COGNITO',
     *     UserPoolConfigs: CreateBackendAuthUserPoolConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
