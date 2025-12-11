<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateRoleMappings|null $rbacRoleMappings
 * @property ArgoCdNetworkAccessConfigRequest|null $networkAccess
 */
class UpdateArgoCdConfig extends Shape
{
    /**
     * @param array{
     *     rbacRoleMappings?: UpdateRoleMappings|null,
     *     networkAccess?: ArgoCdNetworkAccessConfigRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
