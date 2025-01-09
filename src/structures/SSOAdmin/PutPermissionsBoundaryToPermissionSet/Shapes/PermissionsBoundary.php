<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutPermissionsBoundaryToPermissionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerManagedPolicyReference $CustomerManagedPolicyReference
 * @property string $ManagedPolicyArn
 */
class PermissionsBoundary extends Shape
{
    /**
     * @param array{
     *     CustomerManagedPolicyReference?: CustomerManagedPolicyReference,
     *     ManagedPolicyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
