<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationConfiguration $authorizationConfiguration
 */
class SecurityConfigurationData extends Shape
{
    /**
     * @param array{authorizationConfiguration?: AuthorizationConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
