<?php

namespace Sunaoka\Aws\Structures\AccountAccess\CreateEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Principal $principal
 * @property string $roleArn
 */
class PrincipalRoleEntitlement extends Shape
{
    /**
     * @param array{
     *     principal: Principal,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
