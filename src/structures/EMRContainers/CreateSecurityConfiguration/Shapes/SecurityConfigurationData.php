<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationConfiguration|null $authorizationConfiguration
 */
class SecurityConfigurationData extends Shape
{
    /**
     * @param array{authorizationConfiguration?: AuthorizationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
