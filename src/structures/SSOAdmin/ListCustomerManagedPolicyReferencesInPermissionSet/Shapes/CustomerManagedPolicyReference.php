<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListCustomerManagedPolicyReferencesInPermissionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Path
 */
class CustomerManagedPolicyReference extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Path?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
