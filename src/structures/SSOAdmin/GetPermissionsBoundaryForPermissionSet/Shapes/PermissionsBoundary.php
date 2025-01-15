<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetPermissionsBoundaryForPermissionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerManagedPolicyReference|null $CustomerManagedPolicyReference
 * @property string|null $ManagedPolicyArn
 */
class PermissionsBoundary extends Shape
{
    /**
     * @param array{
     *     CustomerManagedPolicyReference?: CustomerManagedPolicyReference|null,
     *     ManagedPolicyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
