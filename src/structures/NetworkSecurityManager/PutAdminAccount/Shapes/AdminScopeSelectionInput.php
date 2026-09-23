<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accounts
 * @property list<string>|null $organizationalUnits
 */
class AdminScopeSelectionInput extends Shape
{
    /**
     * @param array{
     *     accounts?: list<string>|null,
     *     organizationalUnits?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
