<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListCustomerManagedPolicyReferencesInPermissionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Path
 */
class CustomerManagedPolicyReference extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Path?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
