<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ArgoCdRoleMapping>|null $addOrUpdateRoleMappings
 * @property list<ArgoCdRoleMapping>|null $removeRoleMappings
 */
class UpdateRoleMappings extends Shape
{
    /**
     * @param array{
     *     addOrUpdateRoleMappings?: list<ArgoCdRoleMapping>|null,
     *     removeRoleMappings?: list<ArgoCdRoleMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
