<?php

namespace Sunaoka\Aws\Structures\SSO\ListAccountRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $roleName
 * @property string|null $accountId
 */
class RoleInfo extends Shape
{
    /**
     * @param array{
     *     roleName?: string|null,
     *     accountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
