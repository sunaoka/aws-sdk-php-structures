<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Unit|null $includeAll
 * @property AdminScopeSelectionInput|null $includeOnly
 * @property AdminScopeSelectionInput|null $excludeOnly
 */
class AdminScopeFilterInput extends Shape
{
    /**
     * @param array{
     *     includeAll?: Unit|null,
     *     includeOnly?: AdminScopeSelectionInput|null,
     *     excludeOnly?: AdminScopeSelectionInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
