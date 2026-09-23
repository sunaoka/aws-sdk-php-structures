<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Unit|null $includeAll
 * @property AdminScopeSelection|null $includeOnly
 * @property AdminScopeSelection|null $excludeOnly
 */
class AdminScopeFilter extends Shape
{
    /**
     * @param array{
     *     includeAll?: Unit|null,
     *     includeOnly?: AdminScopeSelection|null,
     *     excludeOnly?: AdminScopeSelection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
