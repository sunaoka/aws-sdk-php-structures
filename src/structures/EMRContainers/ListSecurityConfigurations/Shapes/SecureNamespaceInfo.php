<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterId
 * @property string $namespace
 */
class SecureNamespaceInfo extends Shape
{
    /**
     * @param array{
     *     clusterId?: string,
     *     namespace?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
