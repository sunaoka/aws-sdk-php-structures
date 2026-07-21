<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationConfiguration|null $authorizationConfiguration
 * @property AuthenticationConfiguration|null $authenticationConfiguration
 */
class SecurityConfigurationData extends Shape
{
    /**
     * @param array{
     *     authorizationConfiguration?: AuthorizationConfiguration|null,
     *     authenticationConfiguration?: AuthenticationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
