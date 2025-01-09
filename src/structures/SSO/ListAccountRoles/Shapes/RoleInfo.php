<?php

namespace Sunaoka\Aws\Structures\SSO\ListAccountRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleName
 * @property string $accountId
 */
class RoleInfo extends Shape
{
    /**
     * @param array{
     *     roleName?: string,
     *     accountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
