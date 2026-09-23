<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AccountReference>|null $accounts
 * @property list<OrganizationalUnitReference>|null $organizationalUnits
 */
class AdminScopeSelection extends Shape
{
    /**
     * @param array{
     *     accounts?: list<AccountReference>|null,
     *     organizationalUnits?: list<OrganizationalUnitReference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
